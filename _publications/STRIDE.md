---
title: "From Sparse Sensors to Continuous Fields: STRIDE for Spatiotemporal Reconstruction"
collection: publications
permalink: /publication/STRIDE
excerpt: ''
date: 2026-02-04
venue: 'arXiv'
paperurl: 'https://arxiv.org/abs/2602.04201'
---
*Authors:* ***Yanjie Tong,*** *Peng Chen*

Reconstructing high-dimensional spatiotemporal fields from sparse point-sensor measurements is a central challenge in learning parametric PDE dynamics. Existing approaches often struggle to generalize across trajectories and parameter settings, or rely on discretization-tied decoders that do not naturally transfer across meshes and resolutions. We propose STRIDE (Spatio-Temporal Recurrent Implicit DEcoder), a two-stage framework that maps a short window of sensor measurements to a latent state with a temporal encoder and reconstructs the field at arbitrary query locations with a modulated implicit neural representation (INR) decoder. Using the Fourier Multi-Component and Multi-Layer Neural Network (FMMNN) as the INR backbone improves representation of complex spatial fields and yields more stable optimization than sine-based INRs. We provide a conditional theoretical justification: under stable delay observability of point measurements on a low-dimensional parametric invariant set, the reconstruction operator factors through a finite-dimensional embedding, making STRIDE-type architectures natural approximators. Experiments on four challenging benchmarks spanning chaotic dynamics and wave propagation show that STRIDE outperforms strong baselines under extremely sparse sensing, supports super-resolution, and remains robust to noise.

Download paper [here](https://arxiv.org/abs/2602.04201)

![image](/assets/STRIDE(1).pdf)
