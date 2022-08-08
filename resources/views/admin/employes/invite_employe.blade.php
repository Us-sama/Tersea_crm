<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          inviter un employé
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        @if(count($errors))
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                        <form action="{{route('admin.employes.invite.send')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email_employe" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email_employe" name="email_employe" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="nom_employe" class="form-label ">Nom Complet</label>
                                <input type="text" class="form-control" id="nom_employe" name="nom_employe" placeholder="Nom">
                            </div>
                            <div class="mb-3">
                                <label for="societe_id" class="form-label ">Société</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="societe_id" name="societe_id">
                                    <option value="" disabled selected>Selectionnez une Société</option>
                                    @foreach($societes as $societe)
                                    <option value="{{$societe->id}}">{{$societe->societe_nom}}</option>
                                    @endforeach
                                  </select>
                                  <button type="submit" class="btn btn-dark float-right mb-4" >Envoyer l'invitation</button>
                            </div>


                        </form>

                    </div>





                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
