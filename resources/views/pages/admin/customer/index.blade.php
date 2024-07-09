<x-admin-layout>
    @section('page_title', 'Product Management')
    @section('page_description', 'List of products')

    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-12">
                <header class="mb-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="display-5 mb-0">Customer Management</h2>
                            <p class="lead mb-4">Manage your customers and their orders</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCustomerModal">Add
                                Customer</button>
                        </div>
                    </div>
                </header>

                <section>
                    <div class="card card-raised shadow-none">
                        <div class="card-body">
                            <livewire:admin.customer.table.view-table />
                        </div>
                    </div>
                </section>
            </div>
        </div>

        @push('modals')
            <div class="modal fade" id="newCustomerModal" tabindex="-1" aria-labelledby="newCustomerModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newCustomerModalLabel">Create a new customer</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <livewire:admin.customer.forms.new-form />
                    </div>
                </div>
            </div>
        @endpush

        @push('scripts')
            <script>
                Livewire.on('customer-created', (customerId) => {
                    let modal = bootstrap.Modal.getInstance(document.getElementById('newCustomerModal'));
                    modal.hide();
                });
            </script>
        @endpush
</x-admin-layout>
