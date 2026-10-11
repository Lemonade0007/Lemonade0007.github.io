---
title: "C-STRIDE: An Observation-Driven AI Digital Twin for Predicting Basin-Wide Flood Fields from Sparse Stream-Gauge Histories"
collection: publications
permalink: /publication/C-STRIDE
excerpt: ''
date: 2026-09-30
venue: 'arXiv'
paperurl: 'https://arxiv.org/abs/2609.39005'
authors: '**Yanjie Tong**, Phillip Si, Yuan Qiu, Peng Chen'
summary: 'An observation-driven digital twin that turns sparse stream-gauge histories, terrain, and rainfall into basin-wide flood predictions.'
figures:
  - image: /assets/C_STRIDE_diagram.png
    source: /assets/C_STRIDE_diagram.pdf
    caption: 'C-STRIDE architecture for predicting basin-wide flood fields from sparse stream-gauge histories.'
---
*Authors:* {{ page.authors | markdownify | remove: '<p>' | remove: '</p>' }}

C-STRIDE is an observation-driven AI digital twin that predicts basin-wide water depth from short histories at sparse stream gauges, terrain, and rainfall, with forecasts extending up to one day ahead. Trained on simulations from a calibrated two-dimensional hydrodynamic model, it requires no separate data-assimilation step. In the Des Plaines River basin near Chicago, six gauges support predictions across 4.2 million 30-m grid cells. Terrain and rainfall together reduce errors by about 40% compared with gauge histories alone. With known future rainfall, errors remain near 15% one day ahead, compared with nearly 40% without rainfall. Using real gauge records without retraining shifts predictions toward observed hydrographs at three of six gauges. The model runs about 150 times faster than the hydrodynamic model, offering a path toward continuously updated flood predictions while still requiring evaluation with real-time observations and rainfall forecasts.
