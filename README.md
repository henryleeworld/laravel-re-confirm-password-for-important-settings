# Laravel 7 重新確認密碼以進行重要設置

重新確認密碼確認使用者後，預設情況下會在使用者 session 中儲存一個時間戳記，時間戳記預設持續 3 個小時，因此使用者不必在此期間再次輸入密碼。 

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 你可以經由 `/login` 來進行登入，登入後點選 [前往我的秘密] 按鈕會請使用者重新確認密碼以進入瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/U1XEuAb.png)
> 請使用者重新確認密碼

![](https://i.imgur.com/KwXhnDm.png)
> 進入頁面瀏覽