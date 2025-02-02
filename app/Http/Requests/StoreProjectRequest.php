<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_name' => 'required|max:255',
            'tools_used' => 'required|array',
            'tools_used.*' => 'exists:project_tools,id',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function validatedData()
    {
        $data = [
            'title' => $this->input('title'),
            'company_name' => $this->input('company_name'),
            'image' => $this->file('image') ? $this->file('image')->store('projects', 'public') : null,
            'company_logo' => $this->file('company_logo') ? $this->file('company_logo')->store('company_logos', 'public') : null,
        ];
        return $data;
    }
}
