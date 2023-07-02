# Kubernetes Day 4Linux

## Kubernetes com piloto automático na Google Cloud

## Configurando o Projeto

Você pode usar um projeto existente do Google Cloud Platform para este tutorial ou pode [criar um projeto](https://cloud.google.com/resource-manager/docs/creating-managing-projects#creating_a_project).

Abra o <walkthrough-editor-spotlight spotlightId="menu-terminal">terminal</walkthrough-editor-spotlight> e siga os passos abaixo:

### 1. Configure as variáveis de ambiente

No terminal, defina duas variáveis `PROJECT_ID` e `COMPUTE_ZONE`, caso ainda não as tenha configurado.

```bash
PROJECT_ID=meu-projeto
```
Substitua `meu-projeto` pelo seu [project id](https://support.google.com/cloud/answer/6158840).

```bash
COMPUTE_ZONE=soutamerica-east1-c
```
Substitua COMPUTE_ZONE pela zona onde você quer provisinar os recursos [compute zone](https://cloud.google.com/compute/docs/regions-zones#available), por exemplo: `soutamerica-east1-c`.

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
gcloud services enable artifactregistry.googleapis.com
```

### 

Em seguida, vamos criar nosso cluster do GKE Auto Pilot.


## Criando um Cluster GKE Auto Pilot

Um cluster consiste em pelo menos uma máquina de plano de controle de cluster e várias máquinas de trabalho chamadas nós. Os nós são [instâncias de máquina virtual (VM) do Compute Engine](https://cloud.google.com/compute/docs/instances) que executam os processos do Kubernetes necessários para torná-los parte do cluster.

O Autopilot do GKE é um modo de operação no GKE em que o Google gerencia a configuração do cluster, incluindo nós, escalonamento, segurança e outras configurações prévias. Os clusters do Autopilot são otimizados para executar a maioria das cargas de trabalho de produção e provisionar recursos de computação com base nos manifestos do Kubernetes. A configuração simplificada segue as práticas recomendadas e recomendações do GKE para configuração, escalonabilidade e segurança do cluster e da carga de trabalho.

Você só paga pela CPU, pela memória e pelo armazenamento que as cargas de trabalho solicitarem enquanto são executadas no Autopilot do GKE Você não é cobrado pela capacidade não utilizada nos nós, porque o GKE gerencia os nós.

### 1. Criar um cluster GKE AutoPilot

Execute o comando abaixo em seu terminal para criar um cluster `k8s-day-cluster`:

```
gcloud container clusters create-auto --region=southamerica-east1 k8s-day-cluster
```

Pode levar vários minutos para concluir a criação do cluster.

Você pode usar o comando abaixo para listar os clusters ativos na sua conta:

```
gcloud container clusters list
```


### 2. Obter as credenciais de autenticação

Depois da criação do cluster, você precisa obter credenciais de autenticação para interagir com o cluster.

```
gcloud container clusters get-credentials k8s-day-cluster
```

Este comando configura `kubectl` para usar o cluster que você criou.


Em seguida, vamos implantar um aplicativo no cluster.


```
kubectl create namespace 4linux
```

```
kubectl create namespace 4linux
```

gcloud artifacts locations list


gcloud artifacts repositories create repo-4linux \
   --repository-format=docker \
   --location=southamerica-east1 \
   --description="Docker repository"


git clone https://github.com/GoogleCloudPlatform/kubernetes-engine-samples

cd kubernetes-engine-samples/hello-app


gcloud services enable sourcerepo.googleapis.com

gcloud services enable artifactregistry.googleapis.com

gcloud services enable container.googleapis.com



https://cloud.google.com/kubernetes-engine/docs/tutorials/hello-app#create_a_repository

https://cloud.google.com/kubernetes-engine/docs/samples

https://github.com/GoogleCloudPlatform/kubernetes-engine-samples

https://github.com/GoogleCloudPlatform/kubernetes-engine-samples/tree/main/gke-stateful-mysql

https://github.com/GoogleCloudPlatform/kubernetes-engine-samples/tree/main/hello-app

https://cloud.google.com/kubernetes-engine/docs/tutorials/guestbook#objectives
