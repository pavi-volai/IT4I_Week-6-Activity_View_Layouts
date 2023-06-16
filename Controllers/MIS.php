<?php

namespace App\Controllers;

class MIS extends BaseController
{
    public function Dashboard()
    {
        $data = [
            'page_title' => 'MIS of Brgy. Potol',
            'page_heading1' => 'Dashboard',  
            'page_heading2' => 'Brgy Potol | Dashboard'
        ];

        return view('view_dashboard', $data);
    }

    public function Residents_Profile()
    {
        $data = [
            'page_title' => 'MIS of Brgy. Potol',
            'page_heading1' => 'Residents Profile',  
            'page_heading2' => 'Brgy Potol | Residents Profile'
        ];

        return view('view_residents_profile', $data);

    }
    
    public function Officials_Profile()
    {
        $data = [
            'page_title' => 'MIS of Brgy. Potol',
            'page_heading1' => 'Officials Profile',  
            'page_heading2' => 'Brgy Potol | Official Profile'
        ];

        return view('view_officials_profile', $data);

    }

    public function Events()
    {
        $data = [
            'page_title' => 'MIS of Brgy. Potol',
            'page_heading1' => 'Brgy. Events',  
            'page_heading2' => 'Brgy Potol | Brgy. Events'
        ];

        return view('view_events', $data);

    }

    public function Mapping()
    {
        $data = [
            'page_title' => 'MIS of Brgy. Potol',
            'page_heading1' => 'Brgy. Map',  
            'page_heading2' => 'Brgy Potol | Brgy. Map'
        ];

        return view('view_mapping', $data);

    }


}
