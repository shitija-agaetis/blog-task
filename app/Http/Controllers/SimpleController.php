<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SimpleController extends Controller
{
    public function index(Request $request)
{
    $query = Category::query();

    $sort = $request->input('sort', 'name_asc');
    $filter = $request->input('filter');

    // Apply sorting
    if ($sort == 'name_asc') {
        $query->orderBy('name', 'asc');
    } elseif ($sort == 'name_desc') {
        $query->orderBy('name', 'desc');
    } elseif ($sort == 'date_asc') {
        $query->orderBy('created_at', 'asc');
    } elseif ($sort == 'date_desc') {
        $query->orderBy('created_at', 'desc');
    }

   

     $categories = $query->paginate(9)->appends($request->except('page'));

    // Get all categories for the filter dropdown
    $allCategories = Category::select('name')->distinct()->get();

    return view('category.index', compact('categories', 'allCategories'));
}

public function blog(Request $request)
{
    $query = Category::query();

    // Handle search functionality
    if ($search = $request->input('search')) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('description', 'LIKE', "%{$search}%");
    }

    // Handle filter by category name
    if ($filter = $request->input('filter')) {
        $query->where('name', $filter);
    }

    // Handle sorting
     $sort = $request->input('sort', 'name_asc');
    switch ($sort) {
        case 'name_desc':
            $query->orderBy('name', 'desc');
            break;
        case 'date_asc':
            $query->orderBy('created_at', 'asc');
            break;
        case 'date_desc':
            $query->orderBy('created_at', 'desc');
            break;
        default:
            $query->orderBy('name', 'asc');
            break;
    }

    $categories = $query->paginate(6)->appends($request->except('page'));

    $allCategories = Category::select('name')->distinct()->get();

    return view('category.blog', compact('categories', 'allCategories'));
}
  public function readmore($id)
    {
        $category = Category::findOrFail($id);

        return view('category.readmore', compact('category'));
    }



    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image_path'] = 'storage/' . $imagePath;
        }

        Category::create($data);

        return redirect()->route('category.index')->with('status', 'Category Created Successfully');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($category->image_path && Storage::exists(str_replace('storage/', '', $category->image_path))) {
                Storage::delete(str_replace('storage/', '', $category->image_path));
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data['image_path'] = 'storage/' . $imagePath;
        }

        $category->update($data);

        return redirect()->route('category.index')->with('status', 'Category Updated Successfully');
    }

    public function destroy(Category $category)
    {
        if ($category->image_path && Storage::exists(str_replace('storage/', '', $category->image_path))) {
            Storage::delete(str_replace('storage/', '', $category->image_path));
        }

        $category->delete();
        return redirect()->route('category.index')->with('status', 'Category Deleted Successfully');
    }
}
