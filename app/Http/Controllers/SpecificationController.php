<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Product;
use App\Models\Specification;
use App\Http\Requests\StoreSpecificationRequest;
use App\Http\Requests\UpdateSpecificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $specifications = $product->configurations->flatMap->specifications;

        return view('product.showDetail', compact('product', 'specifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpecificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecificationRequest $request)
    {

    }

    public function addSpecification(Request $request, Product $product, $configurationId)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);

        // Find the configuration based on the provided configurationId
        $configuration = Configuration::findOrFail($configurationId);

        // Create a new specification and associate it with the configuration
        $specification = new Specification([
            'name' => $request->input('name'),
            'value' => $request->input('value'),
        ]);

        // Save the specification to the configuration
        $configuration->specifications()->save($specification);

        // Redirect back to the configuration page or wherever you need
        return redirect()->route('product.showDetail', ['configurationId' => $configurationId])->with('success', 'Đã thêm thông số kỹ thuật thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function show(Specification $specification)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function edit(Specification $specification, Product $product)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecificationRequest  $request
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecificationRequest $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);

        // Find the specification by its ID
        $specification = Specification::findOrFail($id);

        // Update the specification
        $specification->update([
            'name' => $validatedData['name'],
            'value' => $validatedData['value'],
        ]);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Thông số kỹ thuật được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specification $specification, $id)
    {
        $specification = Specification::findOrFail($id);

        // Delete the specification
        $specification->delete();

        return redirect()->back()->with('success', 'Đã xóa thành công thông số kỹ thuật');
    }
}
