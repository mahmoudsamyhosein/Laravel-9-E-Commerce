<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
class AdminContactComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $contacts = Contact::paginate(12);
        return view('livewire.admin.admin-contact-component',[ 'contacts' => $contacts ])->layout('layouts.base');
    }
}
