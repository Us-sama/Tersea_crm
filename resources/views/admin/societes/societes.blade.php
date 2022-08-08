<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sociétés
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(count($errors))
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif

                    <div class="row mb-4">
                        <div class="col-10">
                            {{-- <h1 class="display-1 p-4">Societés</h1> --}}
                        </div>
                        <div class="col-2">
                            {{-- <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter une societé</button> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Ajouter une societé
                            </button>

                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une societé</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="{{ route('admin.societes.create')}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="societe_nom" class="form-label">Nom de la sociteté</label>
                                                <input type="text" class="form-control" id="societe_nom"
                                                    name="societe_nom">
                                            </div>
                                            <div class="mb-3">
                                                <label for="societe_adresse" class="form-label">Adresse de la
                                                    sociteté</label>
                                                <input type="text" class="form-control" id="societe_adresse"
                                                    name="societe_adresse">
                                            </div>
                                            <div class="mb-3">
                                                <label for="societe_email" class="form-label">Email de la
                                                    sociteté</label>
                                                <input type="email" class="form-control" id="societe_email"
                                                    name="societe_email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="societe_tel" class="form-label">Télephone de la
                                                    sociteté</label>
                                                <input type="tel" class="form-control" id="societe_tel"
                                                    name="societe_tel">
                                            </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <ul class="list-group">
                        @foreach($societes as $societe)

                        <li class="list-group-item" data-bs-toggle="collapse" href="#collapse{{$societe->id}}"
                            role="button" aria-expanded="false" aria-controls="collapse{{$societe->id}}">
                            <h6 class="display-6">{{$societe->societe_nom}}</h6>
                        </li>
                        <div class="collapse" id="collapse{{$societe->id}}">
                            <div class="card card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <ul>
                                                <li><b>{{$societe->societe_nom}}</b></li>
                                                <li>{{$societe->societe_adresse}}</li>
                                                <li>{{$societe->societe_email}}</li>
                                                <li>{{$societe->societe_tel}}</li>
                                                <li><i>Crée par :</i><span class="text-primary">
                                                        {{$societe->getAdminName()}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-8">
                                            <div class="dropdown-center">
                                                <button class="btn btn-dark dropdown-toggle btn-sm float-right"
                                                    style="padding-right: 14px" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">

                                                </button>
                                                <ul class="dropdown-menu">


                                                    <li><button type="button" class="btn btn-outline-dark m-1 w-100"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{$societe->id}}">
                                                            Modifier
                                                        </button></li>
                                                    <form action="{{ route('admin.societes.destroy',$societe->id)}}"
                                                    method="POST">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit"
                                                        class="btn btn-outline-danger m-1 w-100">Supprimer</button>
                                                    </form><!-- Button trigger modal -->

                                                    </li>
                                                </ul>
                                                <!-- Button trigger modal -->
                                                <div class="modal fade" id="exampleModal{{$societe->id}}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class=" modal-dialog ">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modifier
                                                                    les informations de la societé
                                                                    {{$societe->societe_nom}}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <form
                                                                        action="{{ route('admin.societes.edit',$societe->id)}}">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="societe_nom"
                                                                                class="form-label">Nom de la
                                                                                sociteté</label>
                                                                            <input type="text" class="form-control"
                                                                                id="societe_nom" name="societe_nom"
                                                                                value="{{$societe->societe_nom}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="societe_adresse"
                                                                                class="form-label">Adresse de la
                                                                                sociteté</label>
                                                                            <input type="text" class="form-control"
                                                                                id="societe_adresse"
                                                                                name="societe_adresse"
                                                                                value="{{$societe->societe_adresse}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="societe_email"
                                                                                class="form-label">Email de la
                                                                                sociteté</label>
                                                                            <input type="email" class="form-control"
                                                                                id="societe_email" name="societe_email"
                                                                                value="{{$societe->societe_email}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="societe_tel"
                                                                                class="form-label">Télephone de la
                                                                                sociteté</label>
                                                                            <input type="tel" class="form-control"
                                                                                id="societe_tel" name="societe_tel"
                                                                                value="{{$societe->societe_tel}}">
                                                                        </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Annuler</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Enregistrer</button>
                                                                </form>
                                                            </div>
                                                        </div>



                                                    </div>




                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <th>Employe</th>
                                                        <th>Email</th>
                                                        <th>Date de naissance</th>
                                                        <th>date d'embauche</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($employes as $employe)
                                                        @if($employe->societes_id == $societe->id)
                                                        <tr>
                                                            <td>{{$employe->name}}</td>
                                                            <td>{{$employe->email}}</td>
                                                            <td>{{$employe->date_naissance}}</td>
                                                            <td>{{$employe->created_at}}</td>
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

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
