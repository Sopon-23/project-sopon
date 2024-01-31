@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">User</h5>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  @foreach ($user as $u)
                                  <tr>
                                  <td>{{$u->id}}</td>
                                  <td>{{$u->name}}</td>
                                  <td>{{$u->email}}</td>
                                  <td>{{$u->phone}}</td>
                                  <td>
                                    <a href="#"><i class='bx bxs-edit'></i></a>
                                    <a href="#"><i class='bx bx-trash'></i></a>
                                  </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

@endsection