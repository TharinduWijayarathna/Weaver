<?php

namespace App\Livewire\Admin\Customer\Table;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ViewTable extends DataTableComponent
{
    protected $model = Customer::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
             ->setPerPageAccepted([5, 10, 15, 20, 25])
             ->setPerPage(10);
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("Phone", "phone")
                ->sortable()
                ->searchable(),
            Column::make("Address", "address")
                ->sortable()
                ->searchable()
                ->format(function($value) {
                    return $value . '%';
                }),
        ];
    }
}
