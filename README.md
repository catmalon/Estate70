# 蓮海70 ｜ 租屋網站 ｜ estate70
## 環境：
- macOS(Big Sur), Ubuntu 20.04
- php
![](https://imgur.com/g9Dy2gc.png)
- xampp
![](https://imgur.com/yEiJvCH.png)
- Laravel 8.0
<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
  </a>
</p>

## 目的
### 房東
- 此網站提供「房東」刊登欲租出的房屋物件。
- 當有房客提出有意願租屋的申請，「房東」可在網頁以手機和E-mail登入，針對申請進行確認或取消。
- 同一待租物件可同時接收數個申請。
- 確認後，系統會自動寄發E-mail通知該房客，並提供房東聯絡資訊，且該待租物件會從首頁消失。
- 所有房客申請的訂單，無論未處理、已確認、已取消，都仍會**依刊登物件順序**顯示在房東管理頁面中。

### 房客
- 希望租屋的「房客」可在首頁瀏覽所有目前**已刊登**且**未出租**之物件。
- 可使用首頁上方過濾器，篩選符合需求之待租物件。
- 若看到有興趣的租屋，可直接點擊進入該租屋細節頁面。
- 細節頁面最下方，可直接填入姓名、手機、E-mail，對該物件進行申請。
- 房客可同時對不同待租物件進行申請。
- 申請送出後，需等待房東確認回覆。
- 若房東確認後，系統會自動寄發E-mail通知，並提供房東聯絡資訊。

## 主要頁面＆功能介紹
### 首頁
![](https://imgur.com/tCZzVBS.png)
- 篩選器
![](https://imgur.com/qeeMYRf.png)
- 篩選結果
![](https://imgur.com/5snwQzS.png)
- 點擊每個頁面左上角logo <img src=https://imgur.com/1nCyTik.png height=20px> 可回到首頁

### 房東刊登待租物件
- 每個頁面右上角 <img src=https://imgur.com/1g4v5F3.png height=35px> 可進入刊登頁面

![](https://imgur.com/i5wuAit.png)

### 待租物件細節
![](https://imgur.com/LyCDMxo.png)
- 每個待租物件最下方，房客可留下姓名、電話、E-mail，直接送出租屋意願。

![](https://imgur.com/2NOyKWv.png)

### 收到「房東」刊登物件 或 收到「房客」申請租屋
![](https://imgur.com/AbgE0jL.png)

## 房東管理頁面
- 每個頁面右上角 <img src=https://imgur.com/tMFTjSm.png height=35px> 可進入刊登頁面
### 登入畫面
![](https://imgur.com/Frd0Neu.png)

### 管理畫面
- 僅顯示有房客提出申請之待租物件訂單
- 依照刊登順序由新到舊排列

![](https://imgur.com/BFrTTfb.png)
- 滑鼠移動至該物件會變色
- 僅待確認的訂單會有「確認申請」和「取消申請」按鈕

![](https://imgur.com/zx88QEv.png)

## laravel artisan指令與工具
- 啟動server

```php artisan serve```
![](https://imgur.com/lFMkKmd.png)

- 檢視router

```php artisan route:list```
![](https://imgur.com/jBTKizR.png)

- 建立migration

```php artisan make:migration create_<TABLE NAME>_table --create=<TABLE NAME>```

- 執行migration

```php artisan migration```

- 建立 Controller

```php artisan make:controller --resource <CONTROLLER NAME>```

- 建立 Model

```php artisan make:model <MODEL NAME>```
