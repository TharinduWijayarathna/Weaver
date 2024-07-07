<?php

namespace App\Services\Customer;

use App\Models\Customer;

class CustomerService
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function store($data)
    {
        return $this->customer->create($data);
    }

    public function update($data, $id)
    {
        return $this->customer->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return $this->customer->destroy($id);
    }

    public function show($id)
    {
        return $this->customer->find($id);
    }

    public function all()
    {
        return $this->customer->all();
    }
}
