<x-admin-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Employés
            </h2>
            <a class="btn btn-dark float-right" href="{{route('admin.employes.invite')}}">Nouvel Employé</a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Employé</th>
                            <th scope="col">Email</th>
                            <th scope="col">date de naissance</th>
                            <th scope="col">Société</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($employes as $employe)
                          <tr>
                            <td>{{$employe->name}}</td>
                            <td>{{$employe->email}}</td>
                            <td>{{$employe->date_naissance}}</td>
                            <td>{{$employe->getSocieteName()}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
