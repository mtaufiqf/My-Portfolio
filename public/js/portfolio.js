  const lines = [
    { p: '$ ', c: 'whoami', o: 'Muhammad Taufiq F — <b>Fresh Graduate, Software Engineering</b>' },
    { p: '$ ', c: 'cat education.txt', o: 'SMK Negeri 1 Balikpapan · Rekayasa Perangkat Lunak' },
    { p: '$ ', c: 'cat experience.txt', o: 'IT Intern  PT. Arkananta Apta Pratista <br> IT Intern PT. Bima Nusa Internasional' },
    { p: '$ ', c: 'echo $STATUS', o: 'Alhamdulillah, masih hidup 🡒' }
  ];
  const el = document.getElementById('termBody');
  let li = 0;

  function typeLine(line, done){
    const row = document.createElement('div');
    const promptSpan = document.createElement('span');
    promptSpan.className = 'prompt';
    promptSpan.textContent = line.p;
    const cmdSpan = document.createElement('span');
    cmdSpan.className = 'cmd';
    row.appendChild(promptSpan);
    row.appendChild(cmdSpan);
    el.appendChild(row);

    let i = 0;
    const iv = setInterval(function(){
      cmdSpan.textContent = line.c.slice(0, i+1);
      i++;
      if(i >= line.c.length){
        clearInterval(iv);
        const out = document.createElement('div');
        out.className = 'out';
        out.innerHTML = line.o;
        el.appendChild(out);
        done();
      }
    }, 38);
  }

  function next(){
    if(li < lines.length){
      typeLine(lines[li], function(){ li++; setTimeout(next, 300); });
    } else {
      const cur = document.createElement('span');
      cur.className = 'cursor';
      el.appendChild(cur);
    }
  }
  next();

  const revealEls = document.querySelectorAll('.reveal');
    revealEls.forEach(function(el, i){
      // beri jeda kecil bertahap khusus untuk kartu skill & pengalaman
      if (el.classList.contains('skill-card') || el.classList.contains('exp-card')) {
      el.style.setProperty('--delay', (i % 6) * 0.08 + 's');
    }
  });

  const io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(function(e){ io.observe(e); });

  function salinEmail() {
  const email = document.getElementById('emailText').innerText.trim();
  navigator.clipboard.writeText(email).then(function () {
    alert('Email disalin: ' + email);
  });
}