<div
class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
<div class="datatable-top">
    <div class="datatable-dropdown">
        <label>
            <select wire:model="perPage" class="datatable-selector">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
            </select> entries per page
        </label>
    </div>
    <div class="datatable-search">
        <input wire:model.debounce.300ms="search" class="datatable-input"
            placeholder="Search..." type="search" title="Search within table">
    </div>
</div>
<div class="datatable-container">
    <table id="datatablesSimple" class="datatable-table">
        <thead>
            <tr>
                <th><a href="#">Name</a></th>
                <th><a href="#">Ext.</a></th>
                <th><a href="#">City</a></th>
                <th><a href="#">Start Date</a></th>
                <th><a href="#">Completion</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->ext }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->start_date }}</td>
                    <td>{{ $customer->completion }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="datatable-bottom">
    <div class="datatable-info">
        Showing {{ $customers->firstItem() }} to {{ $customers->lastItem() }} of
        {{ $customers->total() }} entries
    </div>
    <nav class="datatable-pagination">
        {{ $customers->links() }}
    </nav>
</div>
</div>
