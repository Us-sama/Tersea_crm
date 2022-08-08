<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Mon profil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container w-50">

                        <form action="{{url('profil',$user->id)}}">
                            @csrf
                            <div class="mb-3">
                                <label for="mail"  class="form-label">Email address</label>
                                <input type="email" name="mail" class="form-control" id="mail" value="{{$user->email}}">

                              </div>
                              <div class="mb-3">
                                <label for="nom"  class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" id="nom" value="{{$user->name}}">
                            </div>
                              <div class="mb-3">
                                  <button type="submit" class="btn btn-dark float-right m-3">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
