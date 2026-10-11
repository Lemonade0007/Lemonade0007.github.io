---
permalink: /
title: "About me"
excerpt: "About me"
author_profile: true
redirect_from: 
  - /about/
  - /about.html
---

<section class="research-hero" aria-labelledby="research-heading">
  <p class="eyebrow">Georgia Tech · Computational Science &amp; Engineering</p>
  <h1 id="research-heading">Learning dynamics.<br><span>Building digital twins.</span></h1>
  <p class="hero-description">Data-driven methods that connect sparse observations to fast, reliable predictions of complex physical systems.</p>
  <div class="hero-actions">
    <a class="action-link action-link--primary" href="{{ '/publications/' | relative_url }}">Explore my research <span aria-hidden="true">↗</span></a>
    <a class="action-link" href="mailto:{{ site.author.email }}">Get in touch <span aria-hidden="true">↗</span></a>
  </div>
  <div class="research-topics" aria-label="Research interests">
    <span>Reduced-order modeling</span><span>Latent dynamics</span><span>Scientific machine learning</span>
  </div>
</section>

<h2 class="section-heading">About me</h2>

Nice to meet you! I'm a third-year Ph.D. student in [Computational Science and Engineering](https://www.cse.gatech.edu/) at [Georgia Tech](https://www.gatech.edu/), advised by Prof. [Peng Chen](https://faculty.cc.gatech.edu/~pchen402/). Following the idea of reduced-order modeling, I am interested in learning latent dynamics in a low-dimensional latent space for dynamical systems and real-world problems. The ultimate goal is to achieve fast and accurate prediction for these systems, i.e., reliable digital twins, that benefit a number of related tasks.

I got my B.S. and B.Eng. from [Tsinghua University](https://www.tsinghua.edu.cn/en/), majoring in Mathematics and Physics + Energy and Power Engineering. I was honored to be advised by Prof. [Xingjian Wang](https://www.depe.tsinghua.edu.cn/depeen/info/1297/1261.htm) from Department of Energy and Power Engineering at Tsinghua University. Feel free to contact me via social media or e-mail if you are interested in working with me or just want to make friends.

<div class="section-heading-row">
  <h2 class="section-heading">Latest research</h2>
  <a href="{{ '/publications/' | relative_url }}">All publications <span aria-hidden="true">↗</span></a>
</div>

{% assign latest_papers = site.publications | sort: 'date' | reverse %}
{% for post in latest_papers limit:1 %}
  {% include publication-card.html paper=post %}
{% endfor %}

<div class="visitor-counter"><a href="http://s01.flagcounter.com/more/Pee"><img src="https://s01.flagcounter.com/mini/Pee/bg_BFC8FF/txt_000000/border_CCCCCC/flags_0/" alt="Flag Counter" border="0" loading="lazy"></a></div>
