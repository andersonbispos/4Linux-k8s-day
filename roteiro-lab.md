# #K8S Day 4Linux - Kubernetes com piloto automático na Google Cloud

## Configurando o Projeto

Você pode usar um projeto existente do Google Cloud Platform para este tutorial ou pode [criar um projeto](https://cloud.google.com/resource-manager/docs/creating-managing-projects#creating_a_project).

Open the <walkthrough-editor-spotlight spotlightId="menu-terminal">terminal</walkthrough-editor-spotlight> and follow the steps below:

### 1. Set environment variables

In the terminal, set your `PROJECT_ID` and `COMPUTE_ZONE` variables if you don't already have them configured.

```bash
PROJECT_ID=meu-projeto
```
Replace `meu-projeto` with your [project id](https://support.google.com/cloud/answer/6158840).

```bash
COMPUTE_ZONE=soutamerica-east1-c
```
Replace COMPUTE_ZONE with your [compute zone](https://cloud.google.com/compute/docs/regions-zones#available), such as `us-west1-a`.

### 2. Defina o projeto e a zona padrão
```bash
gcloud config set project $PROJECT_ID
gcloud config set compute/zone $COMPUTE_ZONE
```

### 3. Ajuste a configuração de exibição dos outputs dos comandos

```bash
gcloud config set accessibility/screen_reader False
```

### 4. Habilite a API do GKE

```bash
gcloud services enable container.googleapis.com
```

### 

Em seguida, vamos criar nosso cluster do GKE Auto Pilot.


## Create a GKE cluster
A cluster consists of at least one cluster control plane machine and multiple worker machines called nodes. Nodes are [Compute Engine virtual machine (VM) instances](https://cloud.google.com/compute/docs/instances) that run the Kubernetes processes necessary to make them part of the cluster.

GKE offers two [modes of operation](https://cloud.google.com/kubernetes-engine/docs/concepts/types-of-clusters#modes) for clusters: [Standard](https://cloud.google.com/kubernetes-engine/docs/concepts/cluster-architecture) and [Autopilot](https://cloud.google.com/kubernetes-engine/docs/concepts/autopilot-architecture). For this tutorial, we'll use Standard mode.

### 1. Criar um cluster GKE AutoPilot

Execute o comando abaixo em seu terminal para criar um cluster `4linux-cluster`:

```
gcloud container clusters create-auto 4linux-cluster
```

Pode levar vários minutos para concluir a criação do cluster.


### 2. Get authentication credentials

After creating your cluster, you need to get authentication credentials to interact with the cluster.

```
gcloud container clusters get-credentials hello-cluster
```

This command configures `kubectl` to use the cluster you created.


Next, let's deploy an app to the cluster.






gcloud config set accessibility/screen_reader False

gcloud config set compute/zone us-central1-a

gcloud services enable sourcerepo.googleapis.com

gcloud services enable artifactregistry.googleapis.com

gcloud services enable container.googleapis.com