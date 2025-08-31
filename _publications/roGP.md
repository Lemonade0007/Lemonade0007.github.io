---
title: "Region-optimal Gaussian process surrogate model via Dirichlet process for cold-flow and combustion emulations"
collection: publications
permalink: /publication/roGP
excerpt: ''
date: 2025-03-04
venue: 'Computer Methods in Applied Mechanics and Engineering'
paperurl: 'https://www.sciencedirect.com/science/article/pii/S0045782525001665'
---
*Authors: Mingshuo Zhou, Ruiye Zuo, Chih-Li Sung,* ***Yanjie Tong,*** *Xingjian Wang*

The present work
develops a novel surrogate model, region-optimal Gaussian process (roGP), to accurately emulate
cold-flow and combustion fields in a significantly short time period. The model leverages an
advanced statistical approach, Dirichlet process (DP) mixture model, to partition the entire spatial
domain of concern into discrete subregions in a physics-informed manner. Each subregion contains
the common features embedded in the collected dataset and is modeled by a Gaussian
process (GP) with shared hyperparameters. Additionally, an active learning strategy iteratively
refines the training dataset by prioritizing high-uncertainty regions, further enhancing predictive
accuracy. The roGP model is evaluated on three representative cases of increasing complexity,
consistently outperforming conventional GP-based surrogates. Results show that roGP effectively
mitigates overfitting in independent GP models and reduces information loss in properorthogonal-
decomposition GP models. In all test cases, roGP achieves superior spatial prediction
accuracy, with relative root mean square errors below 5.5 %. A unique characteristic of the
roGP model is that the DP-optimized subregions of roGP connect physics-alike coordinates among
sampling design points. The entire pressure field in cold-flow case is effectively described by five
subregions, while physical fields in two combustion cases require the elevated number of subregions
due to their increased complexity. roGP achieves substantial acceleration in prediction
time, up to eight orders of magnitude faster than numerical simulations. The developed surrogate
model can be implemented to emulate a range of high-dimensional engineering applications with
high accuracy and efficiency.

Download paper [here](https://www.sciencedirect.com/science/article/pii/S0045782525001665)

![image](/assets/roGP.jpg)
