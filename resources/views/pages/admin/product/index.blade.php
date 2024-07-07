<x-admin-layout>
    @section('page_title', 'Product Management')
    @section('page_description', 'List of products')

    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-12">
                <header class="mb-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="display-5 mb-0">Product Management</h2>
                            <p class="lead mb-4">Manage your products and inventory</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCentered">Add
                                Product</button>
                        </div>
                    </div>
                </header>

                <section>
                    <div class="card card-raised shadow-none">
                        <div class="card-body">
                            <div
                                class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                <div class="datatable-top">
                                    <div class="datatable-dropdown">
                                        <label>
                                            <select class="datatable-selector">
                                                <option value="5">5</option>
                                                <option value="10" selected="">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                            </select> entries per page
                                        </label>
                                    </div>
                                    <div class="datatable-search">
                                        <input class="datatable-input" placeholder="Search..." type="search"
                                            title="Search within table" aria-controls="datatablesSimple">
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
                                            <tr data-index="50">
                                                <td>Joshua Weiss</td>
                                                <td>2289</td>
                                                <td>Saint-L�onard</td>
                                                <td>2010/15/01</td>
                                                <td>52%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="datatable-bottom">
                                    <div class="datatable-info">Showing 51 to 60 of 100 entries</div>
                                    <nav class="datatable-pagination">
                                        <ul class="datatable-pagination-list">
                                            <li class="datatable-pagination-list-item"><a data-page="5"
                                                    class="datatable-pagination-list-item-link">‹</a></li>
                                            <li class="datatable-pagination-list-item"><a data-page="1"
                                                    class="datatable-pagination-list-item-link">1</a></li>

                                            <li class="datatable-pagination-list-item datatable-active"><a
                                                    data-page="6" class="datatable-pagination-list-item-link">6</a>
                                            </li>
                                            <li class="datatable-pagination-list-item"><a data-page="7"
                                                    class="datatable-pagination-list-item-link">7</a></li>

                                            <li class="datatable-pagination-list-item"><a data-page="7"
                                                    class="datatable-pagination-list-item-link">›</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        @push('modals')
            <div class="modal fade" id="exampleModalCentered" tabindex="-1" aria-labelledby="exampleModalCenteredLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenteredLabel">Get this party started?</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Turn up the jams and have a good time.</div>
                        <div class="modal-footer">
                            <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-text-primary" type="button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        @endpush
</x-admin-layout>
