@extends('layouts.layout')

@section('content')


<section class="pb-3">

    <div class="head-section">
        <h2 class="text-left">
            <i class="fas fa-folder-tree fa-lg"></i>
            {{$tags}}
        </h2>
    </div>

    <div class="px-2 table-responsive">

        <table class="table bg-white table-bordered">

            @php

                $evt_id         = $onDetails->id;
                $evt_titre      = $onDetails->titre;
                $evt_lieu       = $onDetails->lieu;
                $evt_desc       = $onDetails->description;
                $evt_date       = Date::create($onDetails->date)->format('d/m/Y');
                $evt_heure      = Date::create($onDetails->date)->format('H:i');
                $evt_comment    = $onDetails->comments;
                $evt_notes      = $onDetails->notes;
                $evt_parts      = $onDetails->participants;
                $evt_public     = $onDetails->public;
                $evt_click      = $onDetails->click;
                $evt_statut     = $onDetails->statut;
                $evt_datEdit    = Date::create($onDetails->datEdite)->format('d/m/Y');
                $evt_dateMaj    = Date::create($onDetails->dateMaj)->format('d/m/Y H:i');
                $evt_agent      = $onDetails->agent;
                $evt_link       = $onDetails->link_img;

            @endphp


            <tbody>
                <tr>
                    <th scope="column">
                        <span class="font-weight-bold">Pick a Plan</span>
                    </th>
                    <td>
                        <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> <span class="font-weight-bold">Starter</span>
                            <div class="price d-flex flex-row align-items-center"> <span class="margins">$</span> <span class="amount">109</span> <span class="margins">/month</span> </div>
                        </div> <button class="btn btn-outline-primary btn-block outline-button">Get started</button>
                    </td>
                    <td>
                        <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> <span class="font-weight-bold">Advanced</span>
                            <div class="price d-flex flex-row align-items-center"> <span class="margins">$</span> <span class="amount">125</span> <span class="margins">/month</span> </div>
                        </div> <button class="btn btn-primary btn-block normal-button">Get started</button>
                    </td>
                    <td>
                        <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> <span class="font-weight-bold">Ultimate</span>
                            <div class="price d-flex flex-row align-items-center"> <span class="margins">$</span> <span class="amount">349</span> <span class="margins">/month</span> </div>
                        </div> <button class="btn btn-outline-primary btn-block outline-button">Get started</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Retail Point of sale</span> <span class="font-weight-light">Streamline your everday</span> </th>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Payments</span> <span class="font-weight-light">Store on credit card rates</span> </th>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Accounting</span> <span class="font-weight-light">Connect to quickbook online</span> </th>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Analytics</span> <span class="font-weight-light">Get insight to grow your business</span> </th>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Ecommerce Website</span> <span class="font-weight-light">Create beautiful websites</span> </th>
                    <td> </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Loyalty</span> <span class="font-weight-light">Get your customers to come back</span> </th>
                    <td> </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <span class="d-block">Dedicated marketing manager</span> <span class="font-weight-light">Get help marketing your business</span> </th>
                    <td> </td>
                    <td> </td>
                    <td>
                        <div class="text-center check"> <i class="fas fa-check"></i> </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</section>







<section class="content-info d-none">

    <div class="head-section">
        <h2>Journal des participants</h2>
    </div>

   <div class="table-responsive px-2">

        <table class="table-points table-striped table-hover result-point">

               <thead class="point-table-head">
                  <tr>
                     <th class="text-left">No</th>
                     <th class="text-left">TEAM</th>
                     <th class="text-center">P</th>
                     <th class="text-center">W</th>
                     <th class="text-center">D</th>
                     <th class="text-center">L</th>
                     <th class="text-center">GS</th>
                     <th class="text-center">GA</th>
                     <th class="text-center">+/-</th>
                     <th class="text-center">PTS</th>
                  </tr>
               </thead>
               <tbody class="text-center">
                  <tr>
                     <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia"><span>Colombia</span>
                     </td>
                     <td>38</td>
                     <td>26</td>
                     <td>9</td>
                     <td>3</td>
                     <td>73</td>
                     <td>32</td>
                     <td>+41</td>
                     <td>87</td>
                  </tr>
                  <tr>
                     <td class="text-left number">2 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/100/000000/brazil.png" alt="Brazil"><span>Brazil</span>
                     </td>
                     <td>38</td>
                     <td>24</td>
                     <td>7</td>
                     <td>7</td>
                     <td>83</td>
                     <td>38</td>
                     <td>+45</td>
                     <td>79</td>
                  </tr>
                  <tr>
                     <td class="text-left number">3 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/argentina.png" alt="Argentina"><span>Argentina</span>
                     </td>
                     <td>38</td>
                     <td>22</td>
                     <td>9</td>
                     <td>7</td>
                     <td>71</td>
                     <td>36</td>
                     <td>+35</td>
                     <td>75</td>
                  </tr>
                  <tr>
                     <td class="text-left number">4<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/japan.png" alt="Japan"><span>Japan</span>
                     </td>
                     <td>38</td>
                     <td>20</td>
                     <td>10</td>
                     <td>8</td>
                     <td>62</td>
                     <td>37</td>
                     <td>+25</td>
                     <td>70</td>
                  </tr>
                  <tr>
                     <td class="text-left number">5 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/flag.png" alt="Senegal"><span>Senegal</span>
                     </td>
                     <td>38</td>
                     <td>19</td>
                     <td>7</td>
                     <td>12</td>
                     <td>58</td>
                     <td>53</td>
                     <td>+5</td>
                     <td>64</td>
                  </tr>
                  <tr>
                     <td class="text-left number">6<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/poland.png" alt="Poland"><span>Poland</span>
                     </td>
                     <td>38</td>
                     <td>18</td>
                     <td>8</td>
                     <td>12</td>
                     <td>52</td>
                     <td>48</td>
                     <td>+4</td>
                     <td>62</td>
                  </tr>
                  <tr>
                     <td class="text-left number">7<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/russian-federation.png" alt="Russia"><span>Russia</span>
                     </td>
                     <td>38</td>
                     <td>18</td>
                     <td>6</td>
                     <td>14</td>
                     <td>54</td>
                     <td>33</td>
                     <td>+21</td>
                     <td>60</td>
                  </tr>
                  <tr>
                     <td class="text-left number">8<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/iran.png" alt="Iran"><span>Iran</span>
                     </td>
                     <td>38</td>
                     <td>12</td>
                     <td>11</td>
                     <td>15</td>
                     <td>48</td>
                     <td>50</td>
                     <td>-2</td>
                     <td>47</td>
                  </tr>
                  <tr>
                     <td class="text-left number">9 <i class="fa fa-circle" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/spain.png" alt="Spain"><span>Spain</span>
                     </td>
                     <td>38</td>
                     <td>26</td>
                     <td>9</td>
                     <td>3</td>
                     <td>73</td>
                     <td>32</td>
                     <td>+41</td>
                     <td>87</td>
                  </tr>
                  <tr>
                     <td class="text-left number">10<i class="fa fa-circle" aria-hidden="true"></i></td>
                     <td class="text-left">
                        <img src="https://img.icons8.com/color/48/000000/france.png" alt="France"><span>France</span>
                     </td>
                     <td>38</td>
                     <td>24</td>
                     <td>7</td>
                     <td>7</td>
                     <td>83</td>
                     <td>38</td>
                     <td>+45</td>
                     <td>79</td>
                  </tr>
                  
                  
        
            </tbody>

        </table>

    </div>
   
</section>





@endsection
