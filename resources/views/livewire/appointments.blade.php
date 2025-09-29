<tbody>
    @foreach ($bookings as $booking)
        @if ($editingBookingId === $booking->id)
            <!-- Editable row -->
            <tr class="table-active">
                <td colspan="3">
                    <!-- Enlarged Card -->
                    <div class="card card-lg">
                        <form wire:submit="update">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="serviceOptionId">Service Option</label>
                                <select wire:model="serviceOptionId" id="serviceOptionId" class="form-control">
                                    <option value="">Select Service Option</option>
                                    @foreach ($serviceOptions as $serviceOption)
                                        <option value="{{ $serviceOption->id }}"
                                                @if($serviceOption->id == $serviceOptionId) selected @endif>
                                            {{ $serviceOption->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('serviceOptionId') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="bookingDate">Booking Date</label>
                                <input type="datetime-local" wire:model="bookingDate" id="bookingDate" class="form-control">
                                @error('bookingDate') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3 text-end">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                                <button class="btn btn-secondary btn-sm" wire:click="cancelEdit">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
            </tr>
        @endif
    @endforeach

    <!-- Rows that are not being edited -->
    @if ($editingBookingId === null)
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->option_name }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>
                    <button class="btn btn-warning btn-sm" wire:click="edit({{ $booking->id }})">Edit</button>
                    <button class="btn btn-danger btn-sm" wire:click="delete({{ $booking->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    @endif
</tbody>
