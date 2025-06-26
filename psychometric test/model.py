import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import joblib

def analyze_responses(responses):
    model = joblib.load('model.pkl')
    df = pd.DataFrame([responses])
    prediction = model.predict(df)
    return {'result': prediction[0]}

def train_model():
    # Updated dummy data matching new options
    data = {
        'q1': [1, 2, 3, 4, 5],
        'q2': [2, 3, 4, 5, 1],
        'q3': [3, 4, 5, 1, 2],
        'q4': [4, 5, 1, 2, 3],
        'q5': [5, 1, 2, 3, 4],
        'q6': [1, 2, 3, 4, 5],
        'q7': [2, 3, 4, 5, 1],
        'q8': [3, 4, 5, 1, 2],
        'q9': [4, 5, 1, 2, 3],
        'q10': [5, 1, 2, 3, 4],
        'result': ['Analytical Thinker', 'Creative Leader', 'Organized Planner', 'Team Player', 'Tech Enthusiast']
    }
    df = pd.DataFrame(data)
    X = df.drop(columns=['result'])
    y = df['result']
    model = RandomForestClassifier(n_estimators=100, random_state=42)
    model.fit(X, y)
    joblib.dump(model, 'model.pkl')

if __name__ == '__main__':
    train_model()
