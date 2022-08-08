<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Invitations
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Société</th>
                                <th scope="col">Invité par</th>
                                <th scope="col">Date d'envoi</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invitations as $invitation)
                            <tr>
                                <td>{{$invitation->nom_employe}}</td>
                                <td>{{$invitation->email_employe}}</td>
                                <td>{{$invitation->getSocieteName()}}</td>
                                <td>{{$invitation->getAdminName()}}</td>
                                <td>{{$invitation->created_at}}</td>

                                <?php if($invitation->statut=='notAccepted') {?>

                                    <td><span class="badge text-bg-warning">En attente</span></td>

                                    <td><button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$invitation->id}}">
                                        Supprimer
                                      </button></td>
                                    <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$invitation->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title " id="exampleModalLabel" style="color: red">Attention !!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Vous etes sure de supprimer l'invitation du <b class="text-primary">{{$invitation->nom_employe}}</b> ?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.invitations.destroy',$invitation->id)}}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit"
                                                class="btn btn-outline-danger">Supprimer</button>
                                        </form>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php }else {?>

                                        <td><span class="badge text-bg-success">Accepted</span></td>
                                        <td><button  class="btn btn-danger btn-sm" disabled>Supprimer</button></td>
                                <?php }?>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>









                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
