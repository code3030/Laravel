@extends('layouts/layout')

@section('title')
    Todo
@endsection

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center sm:justify-start" style="position: relative">
                <h1 style="color: #bb2d2d; font-size: 4rem; margin: 0;">Todos Board</h1>
            </div>

            <form action="/todo" method="POST">
                @csrf
                <table id="insert-form" style="width: 100%; background: #2d3748; margin-bottom: 20px; padding: 10px 8px; border-radius: 0.5rem;">
                    <tbody>
                    <tr>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg @error('id') border border-red-200 @enderror" placeholder="1" name="id"  value="{{ old('id') ? old('id') : '$' }}"/>
                                <label for="id" class="form__label">번호</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="1" name="user_id" required value="{{ old('user_id') ? old('user_id') : '' }}"/>
                                <label for="user_id" class="form__label">회원번호</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="홍길동" name="name" required value="{{ old('name') ? old('name') : '' }}"/>
                                <label for="name" class="form__label">이름</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="01012345678" name="phone" required value="{{ old('phone') ? old('phone') : '' }}"/>
                                <label for="phone" class="form__label">폰 번호</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="amuz@amuz.co.kr" name="email" required value="{{ old('email') ? old('email') : '' }}"/>
                                <label for="email" class="form__label">메일</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="Amuz" name="project" required value="{{ old('project') ? old('project') : '' }}"/>
                                <label for="project" class="form__label">프로젝트</label>
                            </div>
                        </td>
                        <td>
                            <div class="form__group field">
                                <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="20220101" name="period" required value="{{ old('period') ? old('period') : '' }}"/>
                                <label for="period" class="form__label">기간</label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="bg-white dark:bg-gray-800 sm:rounded-lg search-btn insert-btn" style="background: #222936; width: 300px; margin-bottom: 30px" type="submit">추가</button>
                {{--     Error message       --}}
                @error('id')
                <small style="color: #b77272;">{{ $message }}</small>
                @enderror
            </form>
            {{--    에러 발생 시 이벤트를 보여줌   --}}
            @if($errors->any())
                {{ $errors }}
            @endif

            <div id="todo-table-con" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="min-width: 1000px;">
                <table style="width: 100%">
                    <thead style="color: #fff; font-size: 1rem">
                        <th class="w-50">번호</th>
                        <th class="w-70">회원번호</th>
                        <th class="w-70">이름</th>
                        <th class="w-150">휴대폰</th>
                        <th class="w-180">이메일</th>
                        <th class="">프로젝트</th>
                        <th class="w-350">기간</th>
                    </thead>
                    <tbody>
                    @foreach($todo as $member)
                        <tr class="tr-overay" >
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->user_id }}</td>
                            <td>
                                <a href="/todo/{{ $member->id }}">{{ $member->name }}</a>
                            </td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->email }}</td>
                            <td style="text-align: left;">{{ $member->project }}</td>
                            <td>{{ $member->period }}</td>
                            <td style="position: absolute; right: 0; border: 0">
                                <a href="/todo/{{ $member->id }}/edit" class="edit-btn">Edit</a>
                                <form action="/todo/{{ $member->id }}" method="post" class="edit-btn" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" style="background: unset; color: #c7bebe; padding: 0; font-size: 10px;">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-8 search-con">
                <form>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg search-box" placeholder="Name" name="name" id='name' required />
                        <label for="name" class="form__label">Name</label>
                    </div>
                    <button class="bg-white dark:bg-gray-800 sm:rounded-lg search-btn" type="submit">검색</button>
                </form>
            </div>
        </div>
    </div>
@endsection
