<?php

namespace App\Livewire\Admin\Customer\Forms;

use App\Models\Customer;
use App\Services\Customer\CustomerService;

use Livewire\Component;
use Livewire\Attributes\Validate;

class NewForm extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $phone = '';

    #[Validate('required')]
    public $address = '';

    private CustomerService $customerService;

    public function boot(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function render()
    {
        return view('pages.admin.customer.components.new-form');
    }

    public function submit()
    {
        $validated = $this->validate();
        $customer = $this->customerService->store($validated);
        $this->dispatch('customer-created', $customer->id);
    }
}
