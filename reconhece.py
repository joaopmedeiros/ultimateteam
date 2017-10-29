# -*- coding: utf-8 -*-
import cv2
import numpy as np
import pytesseract
from PIL import Image


# Caminho do arquivo
src_path = "C:/Users/joaoc/"

# Caminho do executavel do tesseract
pytesseract.pytesseract.tesseract_cmd = 'C:/Program Files (x86)/Tesseract-OCR/tesseract'


def get_string(img_path):
    # Lendo a imagem pelo open cv
    img = cv2.imread(img_path)

    # Convertendo para tons de cinza
    img = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
  
    # Tratamentos para reducao de ruidos  
    kernel = np.ones((1, 1), np.uint8)
    img = cv2.dilate(img, kernel, iterations=1)
    img = cv2.erode(img, kernel, iterations=1)

    # exportando imagem com primeiro tratamento
    # cv2.imwrite(src_path + "removed_noise.png", img)

    #  tratatando imagem para somente preto e branco
    img = cv2.adaptiveThreshold(img, 255, cv2.ADAPTIVE_THRESH_GAUSSIAN_C, cv2.THRESH_BINARY, 31, 2)

    # exportando imagem com todos tratamentos
    cv2.imwrite(src_path + "thres.png", img)

    # Mandando pro tesseract reconhecer 
    result = pytesseract.image_to_string(Image.open(src_path + "thres.png"))

    return result

print '--- Comecando reconhecimento ---'
result = get_string(src_path + "image.jpeg")
print (result.encode('utf-8').strip())

print "------ Pronto -------"
