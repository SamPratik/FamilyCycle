<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DoctorList as DL;
use App\AmbulanceList as AL;
use App\HospitalList as HL;

class ContactListController extends Controller
{
    public function doctorLists() {
      $doctorLists = DL::orderBy('name', 'ASC')->get();
      return view('user.contacts.doctor_lists', ['doctorLists' => $doctorLists]);
    }
    public function ambulanceLists() {
      $ambulanceLists = AL::orderBy('name', 'ASC')->get();
      return view('user.contacts.ambulance_lists', ['ambulanceLists' => $ambulanceLists]);
    }
    public function hospitalLists() {
      $hospitalLists = HL::orderBy('name', 'ASC')->get();
      return view('user.contacts.hospital_lists', ['hospitalLists' => $hospitalLists]);
    }
}
