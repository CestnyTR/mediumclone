# Medium Clone

Laravel 12 ile geliştirilmiş, [Medium](https://medium.com) benzeri bir blog/yayın platformu. Kullanıcılar yazı yayınlayabilir, kategorilere göz atabilir, birbirini takip edebilir ve yazılara "clap" (alkış) bırakabilir.

## Özellikler

- ✍️ **Yazı yönetimi** — kapak görseli ile yazı oluşturma, düzenleme, silme (slug tabanlı temiz URL'ler)
- 🗂️ **Kategoriler** — yazıları kategorilere göre listeleme
- 👤 **Herkese açık profiller** — `/@kullaniciadi` üzerinden kullanıcı profillerini görüntüleme
- 🤝 **Takip sistemi** — kullanıcıları takip et / takibi bırak
- 👏 **Clap** — yazılara alkış bırakma
- 🔐 **Kimlik doğrulama** — Laravel Breeze ile kayıt, giriş, e-posta doğrulama ve profil yönetimi
- 🖼️ **Medya kütüphanesi** — Spatie Media Library ile görsel yükleme

## Teknolojiler

- **Backend:** Laravel 12, PHP 8.2+
- **Frontend:** Blade, Tailwind CSS 3, Alpine.js, Vite
- **Auth:** Laravel Breeze
- **Paketler:** [spatie/laravel-medialibrary](https://spatie.be/docs/laravel-medialibrary), [spatie/laravel-sluggable](https://github.com/spatie/laravel-sluggable)
- **Test:** Pest
- **Veritabanı:** SQLite (varsayılan)

## Kurulum

### Gereksinimler

- PHP 8.2 veya üzeri
- Composer
- Node.js & npm

### Adımlar

```bash
# Depoyu klonla
git clone <repo-url> mediumclone
cd mediumclone

# Bağımlılıkları yükle
composer install
npm install

# Ortam dosyasını hazırla
cp .env.example .env
php artisan key:generate

# Veritabanını oluştur (SQLite)
touch database/database.sqlite
php artisan migrate --seed

# Görsel yüklemeleri için storage linkini oluştur
php artisan storage:link
```

### Çalıştırma

```bash
# Bir terminalde Vite (frontend)
npm run dev

# Başka bir terminalde Laravel sunucusu
php artisan serve
```

Uygulama `http://localhost:8000` adresinde çalışır.

## Kullanılabilir Rotalar

| Metod | URL | Açıklama |
|-------|-----|----------|
| GET | `/` | Ana sayfa (yazı akışı) |
| GET | `/@{username}` | Herkese açık profil |
| GET | `/@{username}/{slug}` | Yazı detayı |
| GET | `/category/{category}` | Kategoriye göre yazılar |
| GET | `/my-post` | Kendi yazılarım *(auth)* |
| GET / POST | `/post/create` | Yeni yazı *(auth)* |
| PUT / DELETE | `/post/{post}` | Yazı güncelle / sil *(auth)* |
| POST | `/follow/{user}` | Takip et / bırak *(auth)* |
| POST | `/clap/{post}` | Alkışla *(auth)* |

## Veri Modelleri

- **User** — kullanıcı (username ile herkese açık profil)
- **Post** — yazı (kategori, kapak görseli, slug)
- **Category** — kategori
- **Follower** — takip ilişkisi
- **Clap** — yazıya bırakılan alkış

## Test

```bash
php artisan test
```

## Lisans

[MIT](https://opensource.org/licenses/MIT) lisansı altında açık kaynaklıdır.
