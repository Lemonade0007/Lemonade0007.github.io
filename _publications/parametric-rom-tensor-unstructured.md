---
title: "A parametric reduced-order model based on tensor decomposition for unstructured mesh data"
collection: publications
permalink: /publication/parametric-rom-tensor-unstructured
excerpt: ''
date: 2025-08-30
venue: 'Journal of Computational Physics'
paperurl: 'https://www.sciencedirect.com/science/article/pii/S0021999125005832'
codeurl: 'https://github.com/Lemonade0007/parametric-rom-tensor-unstructured'
authors: '**Yanjie Tong**, Qingzhou Lu, Siyu Ding, Xingjian Wang'
summary: 'Tensor-based reduced-order models that preserve spatial structure and compress unstructured mesh data for efficient flow-field prediction.'
figures:
  - image: /assets/construction(4).png
    source: /assets/construction(4).png
    caption: 'Tensor construction for unstructured mesh data.'
  - image: /assets/procedure(7).png
    source: /assets/procedure(7).png
    caption: 'Workflow of the tensor-based parametric reduced-order model.'
---
*Authors:* {{ page.authors | markdownify | remove: '<p>' | remove: '</p>' }}

Proper Orthogonal Decomposition (POD) is commonly employed for model reduction in surrogate models. However, its application often fails to preserve spatial patterns in multi-dimensional data, and imposes significant memory demands in prediction. Moreover, additional challenge arises when unstructured data is encountered because of problems such as introducing interpolation errors. This study proposes a novel data-driven parametric reduced-order model based on tensor decomposition for unstructured mesh data. The proposed surrogate model leverages Tucker and CANDECOMP/PARAFAC (CP) decomposition to capture the spatial correlation of the physical field and compactly represent physical information, enabling memory-efficient and accurate emulation of flow fields. A tensor construction algorithm utilizing spatial partitioning is introduced to reorganize unstructured mesh data, avoiding interpolation errors and ensuring compatibility with tensor decomposition methods. The proposed models are evaluated through two representative scenarios: (1) flow around a circular cylinder and (2) hydrogen-blending combustion in an aeroderivative gas turbine. Comparative analyses with a POD-based model demonstrate that the proposed approach achieves significantly higher data compression ratios (DCRs) with comparable prediction accuracy and computational efficiency. In the cylinder case, the proposed model achieves lower prediction errors for the velocity-x and pressure fields at a DCR an order of magnitude greater than that of the POD-based model. In the combustor case, it achieves a DCR exceeding 1000 while sacrificing less than 1 % accuracy in the temperature field prediction. Additionally, the proposed models demonstrate a computational speed-up of at least eight orders of magnitude over numerical simulations, underscoring their effectiveness for large-scale applications.
