<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ma société
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <h1><b>{{$societe->societe_nom}}</b></h1>
                                    <li>{{$societe->societe_adresse}}</li>
                                    <li>{{$societe->societe_email}}</li>
                                    <li>{{$societe->societe_tel}}</li>
                                </ul>
                            </div>
                            <div class="col-8">
                                <table class="table">
                                    <thead>
                                        <th>Employe</th>
                                        <th>Email</th>
                                        <th>Date de naissance</th>
                                    </thead>
                                    <tbody>
                                        @foreach($employes as $employe)
                                        @if($employe->societes_id == $societe->id)
                                        <tr>
                                            <td>{{$employe->name}}</td>
                                            <td>{{$employe->email}}</td>
                                            <td>{{$employe->date_naissance}}</td>
                                          </tr>
                                          @endif
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
