<form method="post" action="{{ route('posts.store') }}">
                    @csrf
                  <input type="text" name="good">
                  <input type="text" name="bad">
                  <input type="text" name="goal">
                  <input type="hidden" name="user_id" value="{{ $user}}">
                  <button type="submit" name="button">オッケー</button>
                  </form>
