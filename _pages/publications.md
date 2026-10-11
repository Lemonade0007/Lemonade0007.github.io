---
layout: archive
title: "Publications"
permalink: /publications/
author_profile: true
---

<div class="publication-intro">
  <p class="eyebrow">Research / Publications</p>
  <p>From sparse observations to continuous fields. Explore my work on scientific machine learning, surrogate models, and digital twins.</p>
  {% if site.author.googlescholar %}
    <a class="action-link" href="{{ site.author.googlescholar }}">Google Scholar <span aria-hidden="true">↗</span></a>
  {% endif %}
</div>

<div class="publication-list">
  {% assign papers = site.publications | sort: 'date' | reverse %}
  {% for post in papers %}
    {% include publication-card.html paper=post %}
  {% endfor %}
</div>
