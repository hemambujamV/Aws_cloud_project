# Aws_cloud_project
<a href="https://github.com/hemambujamV/Aws_cloud_project/blob/master/Movielist.png"><img src="https://github.com/hemambujamV/Aws_cloud_project/blob/master/Movielist.png" title="MyTitle" halign="right" height="60" />
<img src="https://github.com/hemambujamV/Aws_cloud_project/blob/master/Architecture.PNG" title="My Architecture" halign="left" height="60" /></a>
Website
==================

Movie Recommendation System is a 3 tier web application, that provides the end users a secured environment to upload, download, view and modify their image files in cloud. This application is entirely build on Amazon Web Services (AWS) leveraging their EC2, ELB, Lambda, AutoScaling Group, RDS (MySQL), CloudFront, S3, S3 Transfer Acceleration, R53, CloudWatch, SNS and Route 53.

## Table of content

- [Details](#details)
    - [University](#university-name)
    - [Course](#course-name)
    - [Professor](#professor-and-isa)
    - [Student](#student-name)
- [Introduction](#introduction)
    - [Feature List](#feature-list)
- [Demo](#demo)
    - [Login/Sign-up](#login)
    - [Upload](#upload-a-new-image-to-cloud)
    - [View](#view-image-details-in-list-page)
    - [Download](#download-from-cloud-front-faster)
- [Links](#links)

## Details

### University Name
![SJSU UNIVERSITY]( http://www.sjsu.edu/)

### Course Name
![CLOUD TECHNOLOGIES](info.sjsu.edu/web-dbgen/catalog/courses/CMPE281.html)

### Professor and ISA 
Porfessor: [Mr.SANJAY GARJE](https://www.linkedin.com/in/sanjaygarje/)

### Student Name
[Hemambujam Veeraraghavan] (https://www.linkedin.com/in/hemambujam-veeraraghavan-a34415bb/)


## Introduction
Movie recommendation system is a cloud born 3 tier web application, that provides the end users a secured environment to upload, download, view and modify their movie review files. This application provides features like cloud based object storage, security and efficient file management. This application also maintains a relationship between the user and the file they uploaded by tracking details like which user uploaded, updated the image file at what time. The main idea behind this application is to build unlimited storage space to have a track of user reviews that where upload, download those files with faster data retrieval from public internet, maintain the file details in a database and perform all these operations with user authentication. As a developer, I wanted to build an application that is highly scalable, highly available, load balanced with auto recoverable with 24x7 monitoring services. But I also wanted to develop this application with simple workflows and processes without costing more money. Keeping these featured in my mind, I decided to build this application using AWS Cloud services. By deploying this application in a cloud-based infrastructure like Amazon Web Services (AWS), the application got instant advantages like auto scaling, on-demand provisioning, full automation and multiple integrated services. By using AWS cloud services, I was able to implement additional features like versioning of storage which keeps track of the updates in the image files by default, cross-region replication that makes the stored files available in different Availability Zones (AZs) and supports faster data transfer.

### Feature List
- This web application allows users to upload new file with maximum size of 10MB per file and store the files in the cloud.
- Allow users to browse their uploaded movie review files in the home page with low latency.
- Keep track of the file’s contents and allow users to update the file details. 
- Users can delete their files which will also delete their files from cloud storage.
- Provide the file related content’s to the users for their reference in the view page.
- Allow users to download the files with low latency and faster data delivery.
- Notify the admin when a user uploaded a review file to the cloud with an email.
- 24x7 monitoring service for all the features with all logs and metrics maintenance.
- Maintain the cloud storage in multiple secured locations (Availability Zones) for data recovery and faster retrieval. This also enhances maintaining versions of the storage
- Configure the cloud storage with different types of archived storage based on the frequency of data usage and confidentialities. This is in-build in AWS S3 storage.
- Deploy the entire application in cost effective and auto-scaling cloud compute with proper load balance to manage millions of user requests and auto recovery.
- Register this application with a Domain Name to make it available in public internet.
- Throughout the development and production, track the health of the application and notify the admin in case of emergency and alarm the situation for safety.

## Demo
### Login

* In Web::Page, root page (display no images unless logged in)
* Click on the Login button by entering your user Id and password.

### Upload a new image to cloud

* In the Web page click “ upload  your reviews” button
* Press 'Submit' button.
* The file is uploaded successflly in the AWS S3 cloud bucket

### View image details in list page

* In the home page click on the link “Your previous reviews”
* The table lists the files stored on the bucket starting with the name of the review file
* Followed by the file related details
* You can Edit/ Delete the file from this form
* The files are retrieved from S3 via AWS CloudFront distribution Edge Location

### Download from cloud front faster

* In the list page click on the download link to download the files you want
* The file will be downloaded in your local machine in the 'Downloads' folder

## Links

* [Reference Website](http://www.awscloud.com)
* [Documentation](https://github.com/hemambujamV/Aws_cloud_project/blob/master/Project1_cmpe281.docx)
* [Source code] (https://github.com/hemambujamV/Aws_cloud_project)







