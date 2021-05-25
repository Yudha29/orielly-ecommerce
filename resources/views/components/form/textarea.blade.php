<div class="mb-3">
    <label class="text-gray-500 block font-bold text-xs mb-1.5">{{ $label }}</label>
    <textarea
        rows="4"
        class="border-gray-300 rounded-md focus:border focus:outline-none text-sm placeholder-gray-400 text-gray-700 border py-2.5 px-2 w-full"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
    >{{ $value }}</textarea>
    @if ($error)
        <span class="block mt-0.5 text-xs text-right text-red-500">
            <i class="fa fa-exclamation-circle"></i>
            {{ $error }}
        </span>
    @endif
</div>
