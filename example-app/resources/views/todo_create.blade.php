<h1>create</h1>
<div id="todo-insert-con" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="min-width: 1000px">
    <form action="/todo" method="POST">
        @csrf
        <table id="insert-form" style="width: 100%;">
            <tbody>
            <tr>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="1" name="id" required />
                        <label for="id" class="form__label">번호</label>
                    </div>
                </td>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="홍길동" name="name" required />
                        <label for="name" class="form__label">이름</label>
                    </div>
                </td>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="01012345678" name="phone" required />
                        <label for="phone" class="form__label">폰 번호</label>
                    </div>
                </td>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="amuz@amuz.co.kr" name="email" required />
                        <label for="email" class="form__label">메일</label>
                    </div>
                </td>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="Amuz" name="project" required />
                        <label for="project" class="form__label">프로젝트</label>
                    </div>
                </td>
                <td>
                    <div class="form__group field">
                        <input type="input" class="form__field bg-white dark:bg-gray-800 sm:rounded-lg" placeholder="20220101" name="period" required />
                        <label for="period" class="form__label">기간</label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <button class="bg-white dark:bg-gray-800 sm:rounded-lg search-btn insert-btn" style="background: #222936; width: 300px; " type="submit">추가</button>
    </form>
</div>
