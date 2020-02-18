#!/usr/bin/env python
import cv2
from util import save_image
import sys
import os
import numpy as np

print(sys.argv)

x1 = int(sys.argv[1]) 
y1 = int(sys.argv[2])
x2 = int(sys.argv[3])
y2 = int(sys.argv[4])
x3 = int(sys.argv[5])
y3 = int(sys.argv[6])
x4 = int(sys.argv[7])
y4 = int(sys.argv[8])

ox1 = int(sys.argv[9]) 
oy1 = int(sys.argv[10])
ox2 = int(sys.argv[11])
oy2 = int(sys.argv[12])
ox3 = int(sys.argv[13])
oy3 = int(sys.argv[14])
ox4 = int(sys.argv[15])
oy4 = int(sys.argv[16])

imagename = sys.argv[17]

print(imagename)



img_path = imagename
img = cv2.imread(img_path)
rows,cols,ch = img.shape
print([[x1,y1],[x2,y2],[x3,y3],[x4,y4]])
print([[ox1,oy1],[ox2,oy2],[ox3,oy3],[ox4,oy4]])
pts1 = np.float32([[x1,y1],[x2,y2],[x3,y3],[x4,y4]])
pts2 = np.float32([[ox1,oy1],[ox2,oy2],[ox3,oy3],[ox4,oy4]])

pts1 = np.float32([[30,10],[524,10],[4,550],[550,550]])
pts2 = np.float32([[0,0],[554,0],[0,554],[554,554]])

M = cv2.getPerspectiveTransform(pts1,pts2)

dst = cv2.warpPerspective(img,M,(cols,rows))


save_image('output/{}.jpg'.format(121), dst)
