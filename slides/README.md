---
marp: true
theme: uncover
paginate: true
backgroundColor: #141414
color: #fff
colorSecondary: #10b5bf
# backgroundImage: url('images/main-background.png')
style: |
    section{
      font-family: "Helvetica", monospace;
    }
    section::after {
      font-weight: bold;
      content: attr(data-marpit-pagination) '/' attr(data-marpit-pagination-total);
      font-size: 13pt;
      color: #10b5bf;
      text-shadow: 1px 1px 0 #000;
    }    
---


# **Kubernetes com piloto automático na Google Cloud**

Anderson Bispo

---

<style scoped>
  h4 {
    font-size: 35pt;
    list-style-type: circle;
    font-weight: 900;
    color: #10b5bf
  }
  p {
    font-size: 13pt;
  }
  {
   font-size: 28px;
  }
  img[alt~="center"] {
    display: block;
    margin: 0 auto;
  }

</style>

<!-- _paginate: false -->

![bg right:40%](./images/perfil.png)

#### 🇧🇷 

* Servidor Público do TJBA
* ConsTrutor 4Linux
* 21 de experiência em TI 💻
* Graduado em SI 💻
* Especialista em Gestão de TI e MBA em DW/BI 💻
* HashiCorp Certified: Terraform Associate
* Google Cloud Certified Professional Cloud Architect
* AWS Solutions Architect Associate
* Oracle Cloud Infrastructure Certified Architect Professional
* PSMI- Professional Scrum Master I

Contato: [https://www.linkedin.com/in/andersonbispos/](https://www.linkedin.com/in/andersonbispos/)

---

<style scoped>
  h4 {
    font-size: 35pt;
    list-style-type: circle;
    font-weight: 900;
    color: #10b5bf
  }
  p {
    font-size: 13pt;
  }
  {
   font-size: 28px;
  }
  img {
    width: 800px;
  }
</style>

![CI/CD](./images/ci-cd.jpeg)

---

<style scoped>
  h4 {
    font-size: 35pt;
    list-style-type: circle;
    font-weight: 900;
    color: #10b5bf
  }
  p {
    font-size: 20pt;
    text-align: left;
  }
  {
   font-size: 25px;
   text-align: left;
  }
</style>

![bg left:40% 70%](./images/ci-cd.jpeg)

#### DevOps Cloud Native na Google Cloud

* Code (Cloud Source Repository)
* Build (Cloud Build)
* Release (Artifact Registy)
* Deploy (Cloud Build)
* Monitor (Cloud Operations)
* Operate
    * VMs (Compute Engine + Docker)
    * Google Kubernetes Engine (GKE) 
    * Server Less (App Engine/Cloud Run)
---


![bg right:100%](https://thecloudgirl.dev/images/CloudBuild.jpg)

---