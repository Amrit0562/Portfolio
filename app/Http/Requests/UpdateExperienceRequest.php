<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExperienceRequest extends FormRequest
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
    public function rules()
    {
        $currentYear = date('Y');

        $data = [
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'experience_time' => 'required|integer',

            'join' => [
                'required',
                'date_format:Y',
                'after_or_equal:1950',
                'before_or_equal:' . $currentYear,
                function ($attribute, $value, $fail) use ($currentYear) {
                    if ($value === 'present') {
                        return;
                    }
                    if (!ctype_digit($value) || (int)$value < 1950 || (int)$value > $currentYear) {
                        $fail("The $attribute must be a valid year between 1950 and $currentYear or 'present'.");
                    }
                },
            ],

            'leave' => [
                'required',
                function ($attribute, $value, $fail) use ($currentYear) {
                    if ($value !== 'present' && (!ctype_digit($value) || (int)$value < 1950 || (int)$value > $currentYear)) {
                        $fail("The $attribute must be a valid year between 1950 and $currentYear or 'present'.");
                    }
                },
            ],
        ];
        return $data;
    }

    public function validatedData()
    {
        $data = [
            'position' => $this->input('position'),
            'company' => $this->input('company'),
            'experience_time' => $this->input('experience_time'),
            'join' => $this->input('join'),
            'leave' => $this->input('leave'),
        ];

        $joinYear = (int) $data['join'];
        $leaveYear = $data['leave'] === 'present' ? date('Y') : (int) $data['leave'];

        $data['experience_time'] = max(0, $leaveYear - $joinYear);

        return $data;
    }
}
