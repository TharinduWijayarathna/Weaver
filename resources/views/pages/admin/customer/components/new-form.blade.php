
<form wire:submit="submit">
    <div class="modal-body">
        <div class="form-group mb-3">
            <label for="customer_name">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" wire:model="name"
                placeholder="Enter customer name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="customer_email">Customer Email</label>
            <input type="email" class="form-control" id="email" name="email" wire:model="email"
                placeholder="Enter customer email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="customer_phone">Customer Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" wire:model="phone"
                placeholder="Enter customer phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="customer_address">Customer Address</label>
            <input type="text" class="form-control" id="address" name="address" wire:model="address"
                placeholder="Enter customer address">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="modal-footer">
        <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-text-primary" type="submit">Save changes</button>
    </div>
</form>
