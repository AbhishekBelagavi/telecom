import time
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import pandas as pd
data = {'Price': [], 'Validity': [] ,'Data/Talktime':[], 'Type': [],'Description': [] }


url="https://www.gadgets360.com/mobile-recharge-plans/vi-prepaid"
chrome_driver_path = Service("C:/Users/kavya/Downloads/chromedriver-win64 (1)/chromedriver-win64/chromedriver.exe")
driver = webdriver.Chrome(service = chrome_driver_path)
driver.get(url)

# Click the "Load More" button multiple times
num_loads = 5  # Number of times to click "Load More"
for _ in range(num_loads):
    load_button = driver.find_element(By.XPATH, "/html/body/div[1]/div[4]/div[1]/div[3]/div[1]/div[4]/span")
    load_button.click()
    time.sleep(2)

# Extract Price information using CSS selector
price_elements = driver.find_elements(By.CSS_SELECTOR, "div._flx._pvl._plnprc div")
for price in price_elements:
    price_text = price.text.replace("\n", "").replace("₹", "")
    print(price_text)
    data['Price'].append(price_text)

# Extract Validity information using CSS selector
validity_elements = driver.find_elements(By.CSS_SELECTOR, "div._flx._pvl._plnvw._vldw div")
for validity in validity_elements:
    print(validity.text)
    data['Validity'].append(validity.text)

# Extract Data/TalkTime information using CSS selector
Data_elements = driver.find_elements(By.CSS_SELECTOR, "div._flx._pvl._plnvw div._rpln._flx")
for i in range(0, len(Data_elements), 2):
    Data_text = Data_elements[i].text.replace("\n", " ")
    print(Data_text)
    data['Data/Talktime'].append(Data_text)

# Extract Type information using CSS selector
Type_elements = driver.find_elements(By.CSS_SELECTOR, "div._flx._rcpln span._tglbl")
for type in Type_elements:
    print(type.text)
    data['Type'].append(type.text)


# Extract Description information using CSS selector
Description_elements = driver.find_elements(By.CSS_SELECTOR, "div._flx._pvl._plnprc span._stxt")
for description in Description_elements:
    print(description.text)
    data['Description'].append(description.text)

# Close the browser window
driver.quit()

df = pd.DataFrame.from_dict(data)
df.to_excel("ViPack2.xlsx",index=True)