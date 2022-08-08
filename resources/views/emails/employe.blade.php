@component('mail::message')
# Bonjour {{$nom_employe}}

votre email est : {{$email_employe}}

Vous avez recu une invitaion pour rejoindre la société <h2>{{$societe_nom}}</h2>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<form action="{{route('create_employe')}}" method="POST">
    @csrf
        <input type="email" hidden class="form-control" id="email_employe" name="email_employe" value="{{$nom_employe}}">
        <input type="text" hidden class="form-control" id="nom_employe" name="nom_employe" value="{{$email_employe}}">
        <input type="text" hidden class="form-control" id="societe_nom" name="societe_nom" value="{{$societe_nom}}">
        {{-- <button type="submit" class="btn btn-dark position-absolute top-50 start-50 translate-middle m-4">Accepter l'invitation</button> --}}
</form>
<br>
<a href="http://localhost:8000/create/{{$invitation_id}}" style="text-decoration:none;background-color:black;color:white;border-radius:6px;left: 36%;padding: 10px;">Valider l'invitation</a>







Thanks,<br>
{{ config('app.name') }}
@endcomponent
