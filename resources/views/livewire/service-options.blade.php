<tbody>
    <div class="row py-2">
        <td>
        @foreach ($serviceOptions as $option)
        <div class="col form-check mb-2">
            <input class="form-check-input me-1" type="checkbox" name="services[]" value="{{ $option->id }}" id="service{{ $option->id }}">
            <label class="form-check-label" for="service{{ $option->id }}">
                {{ $option->name }} - ₱{{ number_format($option->price, 2) }}
            </label>
        </div>
        @endforeach
        </td>
    </div>
</tbody>
