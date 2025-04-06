<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
     // Show all packages
     public function index()
     {
         $packages = Package::all();
         return view('admin.pages.packages.index', compact('packages'));
     }

     // Show form to create a new package
     public function create()
     {
         return view('admin.pages.packages.create');
     }

     // Store a new package
     public function store(Request $request)
     {
         // Validate the input
         $request->validate([
             'name' => 'required|string|max:255',
             'description' => 'required|string',
             'price' => 'required|numeric|min:0',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         // Handle the image upload
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public');  // Store in public/packages folder
        } else {
             $imagePath = null;
         }

         // Create the package
         Package::create([
             'name' => $request->name,
             'description' => $request->description,
             'price' => $request->price,
             'image' => $imagePath,
         ]);

         return redirect()->route('packages.index')->with('success', 'Package created successfully!');
     }

     // Show the form to edit a package
     public function edit(Package $package)
     {
         return view('admin.pages.packages.edit', compact('package'));
     }

     // Update the package
     public function update(Request $request, Package $package)
     {
         // Validate the input
         $request->validate([
             'name' => 'required|string|max:255',
             'description' => 'required|string',
             'price' => 'required|numeric|min:0',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         // Handle the image upload
         if ($request->hasFile('image')) {
             // Delete the old image if it exists
             if ($package->image) {
                 Storage::delete($package->image);
             }

             // Upload the new image
             $imagePath = $request->file('image')->store('packages', 'public');  // Store in public/packages folder
        } else {
             $imagePath = $package->image;
         }

         // Update the package
         $package->update([
             'name' => $request->name,
             'description' => $request->description,
             'price' => $request->price,
             'image' => $imagePath,
         ]);

         return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
     }

     // Delete a package
     public function destroy(Package $package)
     {
        // dd($package);
         // Delete the image if it exists
         if ($package->image) {
             Storage::delete($package->image);
         }

         // Delete the package
         $package->delete();

         return redirect()->route('packages.index')->with('success', 'Package deleted successfully!');
     }
}
