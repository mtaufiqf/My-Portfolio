<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to My Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
<style>

</style>
</head>
<body>

<nav>
  <div class="wrap">
    <div class="logo">Muhammad Taufiq F<span>.dev</span></div>
    <div class="navlinks">
      <a href="#tentang">Tentang</a>
      <a href="#pengalaman">Pengalaman</a>
      <a href="#skill">Skill</a>
      <a href="#kontak">Kontak</a>
    </div>
  </div>
</nav>

<header class="hero">
  <div class="wrap hero-grid">
    <div>
      @if ($profile->foto)
        <img src="{{ asset('storage/' . $profile->foto) }}" alt="Foto {{ $profile->nama }}"
            style="width:96px; height:96px; border-radius:50%; object-fit:cover; margin-bottom:20px; border:3px solid var(--teal-soft);">
      @else
        <div style="width:96px; height:96px; border-radius:50%; background:var(--teal-soft); color:var(--teal); display:flex; align-items:center; justify-content:center; font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:28px; margin-bottom:20px;">
          {{ substr($profile->nama, 0, 2) }}
        </div>
      @endif

      <span class="eyebrow">Fresh graduate — software engineering</span>
      <h1> Tidak butuh kata <br> motivasi, yang dibutuhkan <em> cuma uang 10M</em>.</h1>
      <p class="lead">{{ $profile->bio }}</p>
      <div class="btn-row">
        <a href="#kontak" class="btn btn-primary">Hubungi saya</a>
        <a href="#pengalaman" class="btn btn-ghost">Lihat pengalaman</a>
      </div>
    </div>
    <div class="terminal">
      <div class="term-bar">
        <div class="dot r"></div><div class="dot y"></div><div class="dot g"></div>
        <span class="term-title">Taufiq — profil.sh</span>
      </div>
      <div class="term-body" id="termBody"></div>
    </div>
  </div>
</header>

<section id="tentang">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Tentang</span>
      <h2>Siapa saya</h2>
    </div>
    <div class="about-grid">
      <div class="reveal">
        <p>Saya baru saja menyelesaikan pendidikan di SMK Negeri 1 Balikpapan dengan jurusan Rekayasa Perangkat Lunak. Selama masa sekolah, saya mendapat kesempatan magang di bidang IT yang mempertajam pemahaman saya tentang dunia kerja teknologi yang sesungguhnya.</p>
        <p>Sebagai fresh graduate, saya sedang membangun fondasi sebagai pengembang web — mempelajari bahaasa Pemrograman  secara mendalam sambil terus mengasah kemampuan lewat latihan dan proyek kecil.</p>
      </div>
        <div class="info-card reveal">
        <div class="info-row"><span>Pendidikan</span><span>{{ $profile->pendidikan }}</span></div>
        <div class="info-row"><span>Jurusan</span><span>{{ $profile->jurusan }}</span></div>
        <div class="info-row"><span>Status</span><span>Fresh graduate</span></div>
        <div class="info-row"><span>Fokus</span><span>Web development</span></div>
        <div class="info-row"><span>Lokasi</span><span>{{ $profile->lokasi }}</span></div>
        </div>
    </div>
  </div>
</section>

<section id="pengalaman" style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Pengalaman</span>
      <h2>Perjalanan kerja</h2>
    </div>
        @foreach ($experiences as $exp)
        <div class="exp-card reveal">
        <div class="exp-mark">{{ substr($exp->posisi, 0, 2) }}</div>
        <div>
            <h3>{{ $exp->posisi }}</h3>
            <div class="role-meta">{{ $exp->perusahaan }}</div>
            <ul>
              @foreach (explode("\n", $exp->deskripsi) as $poin)
                <li>{{ $poin }}</li>
              @endforeach
            </ul>
        </div>
        </div>
        @endforeach
        
  </div>
</section>

<section id="skill">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Kemampuan</span>
      <h2>Tools & bahasa yang dikuasai</h2>
    </div>
    <div class="skill-grid">
        @foreach ($skills as $skill)
        <div class="skill-card reveal">
            <div class="skill-name">{{ $skill->nama_skill }}</div>
            <div class="skill-desc">{{ $skill->deskripsi }}</div>
            <div class="bar"><i style="width:{{ $skill->persentase }}%"></i></div>
        </div>
        @endforeach
  </div>
</section>

<footer id="kontak">
  <div class="wrap">
    <h2>Mari terhubung</h2>
    <p>Terbuka untuk peluang magang lanjutan, posisi entry-level, atau sekadar berdiskusi soal web development.</p>
    <div class="contact-row">
      <a class="contact-chip" href="mailto:{{ $profile->email }}">
        <i class="fa-solid fa-envelope"></i> Email
      </a>
      <a class="contact-chip" href="{{ $profile->linkedin_url }}" target="_blank">
        <i class="fa-brands fa-linkedin"></i> LinkedIn
      </a>
      <a class="contact-chip" href="{{ $profile->instagram_url }}" target="_blank">
        <i class="fa-brands fa-instagram"></i> Instagram
      </a>
    </div>
    <div style="display:flex; align-items:center; gap:8px; flex-wrap:wrap; margin-top:14px;">
      <span id="emailText" style="font-size:13px; color:#8891A3; font-family:'JetBrains Mono', monospace;">
        {{ $profile->email }}
      </span>
      <button onclick="salinEmail()" style="border:none; background:none; color:#4FAE8A; font-size:12px; cursor:pointer; text-decoration:underline; padding:0;">
        Salin
      </button>
    </div>
    <div class="foot-bottom" style="text-align: center">© 2026 Taufiq. Dibuat dengan apa adanya.</div>
  </div>
</footer>

<script>

</script>
<script src="{{ asset('js/portfolio.js') }}"></script>

</body>
</html>
