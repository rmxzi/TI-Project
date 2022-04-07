#Toxicity inspector
Online websites that incorporate conversation systems have become an increasingly prominent means of 
communication in many ends point applications such as news articles, online stores, and social media 
platforms. Despite the apparent benefits of incorporating conversation systems to expand content distribution 
and enable two-way commination with the end-users, the last decade has witnessed an increase in the toxic 
content, such as cyberbullying, abuse, and toxic comments. Nevertheless, the current toxicity detection 
models are falling short in handling the end users' needs due to the difficulty in handling multi-dimensional 
aspects and context-sensitive nature. Also, it has been shown that those online toxicity content can have 
serious social consequences on the end-user of those online platforms, such as affecting the online user 
experience and driving them out of using the conversation platform. For instance, when news article website 
users encounter toxic comments, they might leave the platform, which will affect the website's customer 
retention rate [1],[7]. Thus, it became a necessity to adopt different mitigation methods to properly eliminate 
the toxic content from a conversation-based system, such as providing the end-users with tools to flag 
abusive content online [5].
Toxicity is one of the major issues within the conversation system that the owner of the online stores 
[1]suffers from managing those kinds of comments. In addition, developing a proper toxicity detection for 
different domains and cross-lingual is highly needed to support multi-lingual online stores [3]. In addition, 
the current toxicity algorithms suffer from implicit toxic comments that are difficult to detect, such as irony 
and sarcasm [3]. This project introduces a web-based application (Toxicity Inspector) to serve as an 
evaluation platform that enables the online store's owners or the researcher of toxicity to inspect the overall 
validity of the toxicity level for given comments. Additionally, it will allow them to provide their feedback 
on the obtained results. Recently, it has been shown that including the end-user in evaluating the robustness 
of the text classification algorithm helps in enhancing the performance of the automated detection algorithm 
[4]. In addition, current systems focus on providing the toxicity for a single set of comments [5]. In contrast, 
our Toxicity Inspector web application provides a novel new functionality that the current field of toxicity 
detection needs, a comparison service that allows inspecting the toxicity between two comments and 
providing a visual explanation to the end-user.
In the following sections, we first explain the problem statement that motivates the need to build a Toxicity 
Inspection web application (section 2). In section 3, we present the solution and list the main functionality of 
our application. Section 4 describes the product vision; Section 5 shows the product roadmap. Section 6 lists 
the main objectives of providing the evaluation inspection of toxicity detection models. Section 7 describes 
the scope and the main stakeholders of the product. Section 8 lists the needed Hardware and Software Tools 
and the associated cost. Finally, section 9 provides information about project team members.
#The Problem
 Current conversation systems, such as comment sections in news article websites and online retailers' stores, 
their customers may encounter various toxic comments. These comments are usually hard to detect using a 
generalized toxicity model, as the overall performance is highly dependent on the topic and the domain [3]. 
For instance, the term "stupid" is derogatory and toxic as comments in general, and it has detrimental 
consequences for the users. But, in some cases, the usage of the previous toxic term, such as in this comment
" this smartphone is stupid!", might have a minor toxicity level, as the owner of the store might find it 
acceptable to some degree because the type of the target in the previous comment is a non-human (product). 
In contrast, the news article platform might find the following comment severely toxic, "Black people are 
stupid!" as the target of the conversation is a human being. Thus, when poisonous language is detected by 
most of the toxicity models, the user has no option to provide their feedback and correction of the obtained 
toxicity label based on the end application domain needs. Additionally, the toxicity models might not be able 
to detect some hateful comments because of the indirect and implicit meanings, such as the usage of sarcasm 
and irony to inflict indirect toxic comments [3]. Our web applications will enable the users to evaluate the 
overall toxicity result and provide feedback on the results acquired. Moreover, the users will be able to 
correct the obtained toxicity label by entering the correct toxicity label and indicating whether the toxic 
comments have implicit hateful meaning
#The Solution
To fix the previous problem encountered in conversation systems, we provide the Toxicity Inspector as a 
web application tool that will give these main solutions: 
1. Identify their task and register: The website will enable the users [[1]] to securely log in and upload the 
comments that need to be inspected for their toxicity level
2. Inspect the data distribution: in this function, the user will be able to see the topic molding for the 
comments and check the frequency of the words. We are going to use Latent Dirichlet allocation 
<https://en.wikipedia.org/wiki/Latent_Dirichlet_allocation> (LDA) to provide an exploratory analysis of the 
text. Mainly we will show the users the possibility to interpret individual topics and check the most frequent 
words, along with inspecting the relationships between the topics in a given collection of comments. We will 
use LDA along with python-based implementation. Also, IntelliJ to build the website.
3. Overall Toxicity inspection of comments set: in this function the user will be able to check the overall health 
(toxicity) of the comments collection. The function will provide the basic classification framework using the 
baseline classification model of the toxicity using perspective API (overall comments level).
4. Interpretation of the toxicity level in the comments: This function will give the user the capability to see the 
contributed features that affect the health of the conversation. We will use an explanation modeling for the toxicity 
generated by perspective API. This function will visualize the explanation cues that lead the classification model to 
generate the labeled results. 
5. Comparison of the toxicity level: This function will enable the user to compare the toxicity between two factors: 
language and topic. This functionality is highly needed as the current studies of the text classification explanations 
show the benefit of including the end-users for validating the obtained results and enhancing the overall 
performance [3].
6. Feedback on the toxicity labeling: This function will enable the user to provide their feedback on the 
correctness of the obtained toxicity labels. Specifically, the user will be able to navigate the comments in the 
comments set and provide the correction of the labels if needed. Moreover, the user will be able to add a new input 
label to specify if the comment contains implicit hate (not directly shown in the comment). The end output will be 
saved as a new dataset with labels corrections along with a new layer of labels that indicates if the comment contains 
implicit hate. 
7. Reclassification of the comments based on the corrections: this function will enable the users to get 
instance enhancement to the classification performance based on the feedback provided by them. This function will 
train a classification model on the corrected set of labels as we will build a simple text classification model using the 
topic and domain information and compare it with perspective API (comparison based on topic and domain). We will 
use a combination of IntelliJ and
Python integration to build the framework and implement the model
8. Comparison between the reclassification and the base model: this function will enable the user to check the 
enhancement provided by retraining the model on the corrected labels. It will provide an explanation visualization of 
the obtained results between the reclassification model and the baseline model (perspective API [6]).
