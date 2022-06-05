<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;
use App\Models\CompanyUser;
use Livewire\WithPagination;

class CompaniesManagement extends Component
{
    use WithPagination;

    public $action,$filter;

    public Company $company;
    public CompanyUser $companyUser;


    protected $rules=[
        'company.name'=>'required|string|max:255',
        'company.email'=>'required|string|email|max:255',
        'company.phone'=>'required|string|max:255',
        'company.address'=>'required|string|max:255',
        'company.document'=>'required|string|max:255',
        'company.is_client'=>'',
        'company.is_provider'=>'',
    ];

    protected $validationAttributes = [
        'company.name'=>'Nombre',
        'company.email'=>'Correo',
        'company.phone'=>'Teléfono',
        'company.address'=>'Dirección',
        'company.document'=>'NIT',
    ];

    public function go($action){
        $this->action=$action;
    }

    public function newCompany(){
        $this->company=new Company;
        $this->action='formCompany';
    }

    public function saveCompany(){
        $this->validate();
        if($this->company->id==''){
            $this->validate([
                'company.document'=>'required|unique:companies,document'
            ]);
        }

        $this->company->save();
        $this->action='';
    }

    public function viewCompany($id){
        $this->company=Company::find($id);
        $this->action='viewCompany';
    }

    public function editCompany($id){
        $this->company=Company::find($id);
        $this->action='formCompany';
    }

    public function changeCompanyStatus($id){
        $company=Company::find($id);
        $company->status=!$company->status;
        $company->save();
    }


    public function render()
    {
        return view('livewire.companies-management',
    ['companies'=>Company::paginate(2)]);
    }
}
