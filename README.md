# 🛍️ GenZ - Platform eCommerce Modern

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Progressive_Web_App-5A0FC8?style=for-the-badge&logo=pwa&logoColor=white" alt="PWA">
  <img src="https://img.shields.io/badge/Single_Page_App-00D8FF?style=for-the-badge&logo=react&logoColor=white" alt="SPA">
  <img src="https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge" alt="License">
</p>

## 📖 Tentang GenZ

**GenZ** adalah platform eCommerce modern yang dikembangkan menggunakan model **Progressive Web Application (PWA)** dan **Single-Page Application (SPA)**. Platform ini menawarkan sumber daya komprehensif bagi pelanggan yang ingin menjelajahi koleksi terbaru, gaya trendi, dan promosi eksklusif. Website ini dirancang user-friendly dan mudah dinavigasi, menyediakan informasi yang kaya dan menjadikannya sumber daya yang berharga untuk pelanggan Anda.

## ✨ Fitur Utama

### 🏪 Sistem Point of Sale (POS) yang Powerful
Kelola transaksi toko secara efisien dengan sistem POS yang robust. Mempercepat proses checkout dan meningkatkan kepuasan pelanggan dengan antarmuka yang intuitif dan responsif.

### 🚀 Instalasi dan Peluncuran Mudah
Jalankan toko online Anda dengan cepat melalui proses instalasi yang tanpa kerumitan. Setup wizard yang user-friendly dan dokumentasi lengkap membuat peluncuran platform eCommerce Anda menjadi mudah, memungkinkan Anda fokus pada pengembangan bisnis daripada berurusan dengan prosedur instalasi yang kompleks.

### 🎨 Antarmuka yang User-Friendly
Nikmati pengalaman pengguna yang seamless dan intuitif dengan desain antarmuka yang dipikirkan secara matang, memastikan navigasi yang mudah dan aksesibilitas yang optimal.

### 📦 Pelacakan Pesanan dan Notifikasi Real-Time
Jaga pelanggan Anda tetap terinformasi di setiap langkah dengan menyediakan pelacakan pesanan dan notifikasi real-time. Tingkatkan transparansi dan bangun kepercayaan dengan update yang seamless.

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel Framework
- **Frontend**: Progressive Web App (PWA) & Single Page Application (SPA)
- **Database**: MySQL/PostgreSQL
- **Payment Gateway**: Mendukung berbagai gateway pembayaran (Stripe, PayPal, Razorpay, dll)
- **Keamanan**: Environment-based credential management

## 📋 Persyaratan Sistem

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Web Server (Apache/Nginx)

## 🚀 Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/jonathan-zefanya/GenZ.git
   cd GenZ
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=genz
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan Migration & Seeder**
   ```bash
   php artisan migrate --seed
   ```

6. **Build Assets**
   ```bash
   npm run dev
   # atau untuk production
   npm run build
   ```

7. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

   Akses aplikasi di `http://localhost:8000`

## 🔐 Konfigurasi Payment Gateway

Untuk menggunakan payment gateway, tambahkan kredensial Anda di file `.env`:

```env
# Stripe
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret

# PayPal
PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_CLIENT_SECRET=your_paypal_client_secret

# Razorpay
RAZORPAY_KEY=your_razorpay_key
RAZORPAY_SECRET=your_razorpay_secret

# Dan payment gateway lainnya...
```

## 📱 Fitur PWA

GenZ mendukung Progressive Web App, yang memungkinkan pengguna untuk:
- Install aplikasi di perangkat mobile
- Akses offline
- Notifikasi push
- Pengalaman seperti aplikasi native

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan fork repository ini dan buat pull request untuk perbaikan atau fitur baru.

1. Fork Project
2. Buat Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke Branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Project ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## 👨‍💻 Developer

Dikembangkan dengan Sepenuh Hati oleh [Jonathan Zefanya](https://github.com/jonathan-zefanya)

## 📧 Kontak & Support

Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi:
- GitHub: [@jonathan-zefanya](https://github.com/jonathan-zefanya)
- Repository: [GenZ](https://github.com/jonathan-zefanya/GenZ)

---

<p align="center">Made with ✨ for the eCommerce Community</p>
