@extends('back.layouts.master')
@section('title','Mesajlarınız')
@section('content')
    

<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h6 class="m-0 font-weight-bold text-primary">Mesajlarınız Burada Listelenir</h6>
    </div>
    @foreach ($contacts as $contact)
    <div class="card-body">
        <div class="table-responsive ">
            <table class="table table-bordered" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Gönderen</th>
                        <th>Telefon</th>
                        <th>E-Posta</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Tarih</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-dark">{{$contact->name}}</td>
                        <td class="text-dark">{{$contact->phone}}</td>
                        <td class="text-dark">{{$contact->email}}</td>
                        <td class="text-dark">{{$contact->topic}}</td>
                        <td class="text-dark">{{$contact->messages}}</td>
                        <td class="text-dark">{{$contact->created_at->diffForHumans()}}</td>
                    
                </tbody>

            </table>
        </div>
    </div>
    @endforeach
</div>


@endsection
