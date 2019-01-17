---
title: "ill"
author: "illscor"
date: "2019년 1월 17일"
output: html_document
---



'''{r ill}
dat <- read.csv('C:/Users/USER/Desktop/프로젝트/csv/R그래프용/dustnill.csv.csv')
cor(dat)
library(ggplot2)
ggplot(dat, aes(J18, PM10))+ geom_point() + geom_smooth(method = "lm")
ggplot(dat, aes(J18, PM2.5))+ geom_point() + geom_smooth(method = "lm")
ggplot(dat, aes(J44, PM10))+ geom_point() + geom_smooth(method = "lm")
ggplot(dat, aes(J44, PM2.5))+ geom_point() + geom_smooth(method = "lm")
ggplot(dat, aes(J45, PM10))+ geom_point() + geom_smooth(method = "lm")
ggplot(dat, aes(J45, PM2.5))+ geom_point() + geom_smooth(method = "lm")

'''




